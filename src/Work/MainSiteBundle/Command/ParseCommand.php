<?php

namespace Work\MainSiteBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Work\MainSiteBundle\Entity\Post;

class ParseCommand extends ContainerAwareCommand
{

	protected function configure()
    {
        $this->setName('rss:get')
             ->setDescription('Get RSS Feeds From Configured Providers')
			 ->addArgument('feedName', InputArgument::REQUIRED, 'Feed Name')
             ->addArgument('feedUrl', InputArgument::REQUIRED, 'Feed URL');
    }
	
	protected function execute(InputInterface $input, OutputInterface $output)
    {
        $rssFeedUrl  = $input->getArgument('feedUrl');
		$rssFeedName = $input->getArgument('feedName');
		
		$reader = $this->getContainer()->get('debril.reader');

		$postRepository = $this->getContainer()->get('doctrine')->getRepository('WorkMainSiteBundle:Post');
		$entityManager  = $this->getContainer()->get('doctrine')->getManager();

		
		$feed  = $reader->getFeedContent($rssFeedUrl);
		$items = $feed->getItems();
		
		$postsHandler = 'http://whymihu.com/news/';
		
		$totalCount = 0;
		
		foreach ($items as $item) {
		
			$uniqueId = sha1($item->getLink() . $rssFeedUrl);
			$isThere  = $postRepository->findOneByUniqueId($uniqueId);
			
			if (empty($isThere)) {
			
				$link = $item->getLink();
				
				$enclosure = $item->getEnclosure();
				
				$previewImage = 'http://whymihu.com/wp-content/uploads/2014/04/Screen-Shot-2014-04-29-at-16.13.27.png';
				
				if ($enclosure && isset($enclosure->attributes()->url) && (string) $enclosure->attributes()->url != '') {
					$previewImage = (string) $enclosure->attributes()->url;
				}
				
				$post = new Post();
				$post->setSource($rssFeedName);
				$post->setSourceLink($rssFeedUrl);
				$post->setSummary($item->getSummary());
				$post->setDescription($item->getDescription());
				$post->setTitle($item->getTitle());
				$post->setLink($link);
				$post->setPath($postsHandler . $rssFeedName . parse_url($link, PHP_URL_PATH));
				$post->setUniqueId($uniqueId);
				$post->setStatus(0);
				$post->setShortLinkHash(crc32($link));
				$post->setEnclosure($previewImage);
				
				if ($item->getUpdated() && $item->getUpdated() instanceof \DateTime) {
					$post->setRssDateTime($item->getUpdated());
				}

				$entityManager->persist($post);
				$entityManager->flush();
				
				$output->writeln('Record ' .$uniqueId . ' inserted successfully [SUCCESS]');
				
			} else {
				$output->writeln('Record Alredy found with uniqueId: ' . $uniqueId . ' [NO CHANGES]');
			}
			
			$totalCount++;
		}
	
        $output->writeln("[{$totalCount} Records processed]");
    }
}
