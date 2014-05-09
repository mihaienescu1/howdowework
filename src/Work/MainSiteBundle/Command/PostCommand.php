<?php

namespace Work\MainSiteBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Work\MainSiteBundle\Entity\Post;

class PostCommand extends ContainerAwareCommand 
{
	protected function configure()
    {
        $this->setName('fb:post')
             ->setDescription('Post on behalf of specified user')
			 ->addArgument('profile', InputArgument::OPTIONAL, 'ProfileName');
    }
	
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$output->writeln('Scheduling links to be posted on facebook');
		
		$brandImg = 'http://whymihu.com/wp-content/uploads/2014/04/Screen-Shot-2014-04-27-at-17.11.46.png';
		
	 	$postRepository = $this->getContainer()->get('doctrine')->getRepository('WorkMainSiteBundle:Post');
		$entityManager  = $this->getContainer()->get('doctrine')->getManager();
		
		$data = $postRepository->findBy(array('status' => 1));
		
		shuffle($data);
		 
		foreach ($data as $key => $line) {

			$result = $this->_processRecord($line);
			
			if ($result->status == 1) {
			
				$line->setStatus(2);
				$entityManager->persist($line);
				$entityManager->flush();
				
				$output->writeln($line->getId() . ' was posted on fb.');
			} else {
				$output->writeln($line->getId() . ' [Api or db error]');
			}

		}
	}
	
	protected function _processRecord(Post $post) 
	{
	
		$summary = $post->getSummary();
		
		if (empty($summary)) {
			$summary = $post->getDescription();
		}
	
		$postContent = array(
    		'message' 		=> 'Sursa: ' . ucfirst($post->getSource()),
    		'link' 			=>  $post->getPath(),
    		'picture' 		=>  $post->getEnclosure(),
    		'name' 			=>  $post->getTitle(),
    		'caption' 		=>  $post->getRssDateTime()->format('\P\u\b\l\i\c\a\t \l\a d/m/Y \o\r\a H:i:s'),
    		'description'	=>  $summary,
    	);
    	
    	$encoded = urlencode(json_encode($postContent));
    	
    	$apiKey = 'PZV2iJ06xGr48uX1Cz8fpYGPw4Q5Vu03'; 
    	
    	$url = 'http://sofiasekret.com/sfp/index.php/api/schedule';
    	
		$fields = array(
			'key' 		=> $apiKey,
			'content' 	=> $encoded,
		);
		
		$fields_string = '';
		foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
		rtrim($fields_string, '&');
		
		$ch = curl_init();
    	
    	curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, count($fields));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		$result = curl_exec($ch);
		
		curl_close($ch);
		
		$apiResponse = json_decode($result);
			//var_dump($result);
		return $apiResponse;
	}
}