<?php

namespace Work\MainSiteBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Work\MainSiteBundle\Entity\Post;

class ShrinkCommand extends ContainerAwareCommand 
{

	const ADFLY_API_KEY  	 = '959440c2bcba97a642931ee536fb459a';
	const ADFLY_UID		 	 = '6684784';
	const ADFLY_DOMAIN       = 'adf.ly';
	const ADFLY_ADVERT_TYPE  = 'int';
	const ADFLY_SLEEP_TIME   = 1000000;
	
	protected function configure()
    {
        $this->setName('rss:shrink')
             ->setDescription('Shrink current RSS Feeds URL That we have in DB')
			 ->addArgument('db', InputArgument::REQUIRED, 'Database');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
    	$mandatoryArg  = $input->getArgument('db');
    	$postRepository = $this->getContainer()->get('doctrine')->getRepository('WorkMainSiteBundle:Post');
		$entityManager  = $this->getContainer()->get('doctrine')->getManager();
		
		$records = $postRepository->findBy(array('status' => 0));
		
		if (!count($records)) {
			$output->writeln("No Records, nothing to shrink!!!");
			return false;
		}
		
		$output->writeln("Starting to process links via adf.ly");
		
		foreach ($records as $record) {
			
			$uid = $record->getUniqueId();	
			
			if ($record->getStatus() > 0) {
				$output->writeln("Record [" . $uid. "] already has a shrinked url, skipped.");
				continue;
			}
			
			$output->writeln("Shrinking record " . $uid);
		
			$shortLink = $this->_getShrinkedUrl($record->getLink());			
			$record->setShortLink($shortLink);
			$record->setStatus(1);
			
			$entityManager->flush();
			
		}
    }
    
    protected function _getShrinkedUrl($url)
    {
    	$apiUrl = 'http://api.adf.ly/api.php?key=' . self::ADFLY_API_KEY .
				  '&uid=' . self::ADFLY_UID . 
				  '&advert_type=' . self::ADFLY_ADVERT_TYPE . 
				  '&domain=' . self::ADFLY_DOMAIN .
				  '&url=' . urlencode($url);
				  
		$shrinkedUrl = file_get_contents($apiUrl);
		
		usleep(self::ADFLY_SLEEP_TIME);
		
		return $shrinkedUrl;
    }

}