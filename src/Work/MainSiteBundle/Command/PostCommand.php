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
		
		// post;
		
		$id_users = 1;
		$fbUserId = '100000766901491';
		$fbAccessToken = 'CAADYLNtRJMABAItBSd9KMZCMdufceG3HqpxWJ5fJEj4on3uj1LtiQ9W4skoSSZCuCCRpkWGpPkbHt0F8uDwNaBbDMAcH3C7ZA1ZB34IKwHKQAOK0XEIC75OWgln7OjQ0ScCq7GFDuMYz1CKHHCElAE5eSvCFq0DFCkRvJPSG8F7iIncxrvwM48qFBMRfduoZD';
		$message = 'Test News';
		$link = 'http://observator.tv/social/femeile-fapturi-de-neinteles-123827.html';
		$picture = $brandImg;
		$name = 'Test Post';
		$caption = 'Test Post Caption';
		$description = 'Test News Description';
		
		
		// cronjobs; 
		
		$id_post = 000;
		$id_wall = '';
		$page_access_token = '';
		$name = 'Mihu';
	 	
	 	
		
	}
}