<?php

namespace Work\MainSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use JMS\SecurityExtraBundle\Annotation\Secure;

class DefaultController extends Controller
{
	public function indexAction()
	{
		return $this->render('WorkMainSiteBundle:Default:index.html.twig');
	}
	
	/**
     * @Secure(roles="IS_AUTHENTICATED_FULLY")
     */
    public function resumeAction()
    {	

    	$my = array(

    		'personal_info' 	=> array(
    			'firstName' 	=> 'Mihai',
    			'lastName'  	=> 'Enescu',
    			'dateOfBirth'  	=> date("m/d/Y", mktime(0, 0, 0, 8, 17, 1987)),
    			'placeOfBirth' 	=> array(
    				'city' => 'Ploiesti',
    				'state' => 'Prahova',
    				'country' => 'Romania',
    				'zip' => 100398
    			),
    			'currentPlace' => array(
    				'city' => 'Munich',
    				'state' => 'Bayern',
    				'country' => 'Germany',
    				'zip' => 80809
    			),
    			'contact' => array(
    				'eMail' => 'enescu.mihai@outlook.com',
    				'phone' => '+49 172 451 4394',
    				'website' => 'http://whymihu.com'
    			)

    		),
    		'objectives' => array(
    			'Business oriented software developer with substantial experience and customer-side awareness. Fluent with most of Agile Development and project management practices and also with design patterns and service-oriented frameworks, enterprise frameworks such as Zend / Symfony2.',
    			'Can code pretty much language independent, and usually cover every operating system.',
    			'I am open to work on any “out of the box” projects that are basically used in small to large companies and have major business impact. I also want to learn an stay challenged.'
    		),
    		'education' => array(
    			array(
    				'institutionName' => 'Spiru Haret University',
    				'location' => array(
	    				'city' => 'Ploiesti',
	    				'state' => 'Prahova',
	    				'country' => 'Romania',
	    				'zip' => 100398
	    			),
	    			'start' => 'September, 2006',
	    			'end'   => 'June, 2010',
	    			'degree'   => 'Mathematics and Computer Science'
    			),
    			array(
    				'institutionName' => '1 MAI High School',
    				'location' => array(
	    				'city' => 'Ploiesti',
	    				'state' => 'Prahova',
	    				'country' => 'Romania',
	    				'zip' => 100398
	    			),
	    			'start' => 'September, 2002',
	    			'end'   => 'June, 2006',
	    			'degree'   => 'Mathematics and Computer Science'
    			)
    		),
    		'experience' => array(
    			array(
    				'company' => 'Westwing Home & Living GMBH',
    				'info' => array(
    					'Westwing is a high-growth eCommerce business that sells stylish furniture and homewares from well-known brands.'
    				),
    				'location' => array(
    					'city' => 'Munich',
    					'country' => 'Germany'
    				),
    				'title'	  => 'Senior Software Developer',
    				'startDate' => 'March, 2013',
    				'endDate'	=> 'Present',
    				'duties' => array(
    					"As a Software Developer my current duties are the following : \n
    					- Design and develop complex web applications and modules for the ecommerce platform\n
    					- Optimize platform for scalability during peak traffic hours \n
						- Maintain Agile development methodologies to ensure code quality and enforce best practices by communicating and sharing them to team members.\n
						"
    				)
    			),

    			array(
    				'company' => 'Cegeka',
    				'info' => array(
    					'Cegeka is a full-service ICT company with its headquarters in Leuven, Belgium which is specialized in IT consultancy, software development, on-site and remote management.'
    				),
    				'location' => array(
    					'city' => 'Leuven',
    					'country' => 'Belgium'
    				),
    				'title'	  => 'Senior Software Developer',
    				'startDate' => 'March, 2012',
    				'endDate'	=> 'March, 2013',
    				'duties' => array(
    					"
    					I was a member of the outsourced e-sales team which works for Telenet (One of the leading providers of Internet, telephony services and cable television in Belgium http://www.telenet.be ).\n
    					My main duties were:\n
    					\t- Offer support for the current ERP system which involves the on-line sales, marketing and server maintenance departments\n
    					\t- Define the user’s requirements for developing and creating/improving software solutions; designing technical solutions and performing feasibility studies;\n
    					\t- Propose viable technical solutions to the product managers and users;\n
    					\t- Model, design and deploy of databases;\n
    					\t- Run performance tests to ensure the quality of the software;\n
    					\t- Participate in the validation of the product life cycle processes which ensured the products are fine-tuned;\n
    					\t- Support final users in the production phase by debugging the existing software solutions.\n
    					\t- Contributed on the implementation of a new Service Layer in current Zend Framework MVC platform, \"the presenter factory\" , which is responsible for the presentation logic of one particular domain object within a given context (locale, output method,...).\n
    					\n
    					Agile Activities :\n
    					\t- Facilitated SPRINT retrospective meetings.\n
    					\t- Facilitated daily SCRUM meetings.\n
						"
    				)
    			),	

				array(
    				'company' => 'eMag.ro',
    				'info' => array(
    					'Worked as a developer for eMag.ro, the largest online retailer in Romania (and one of the largest Romanian retailers across all markets), part of NASPERS group, by developing web, mobile, desktop, and automated applications for the company.'
    				),
    				'location' => array(
    					'city' => 'Bucharest',
    					'country' => 'Romania'
    				),
    				'title'	  => 'Senior Software Developer',
    				'startDate' => 'August, 2012',
    				'endDate'	=> 'March, 2013',
    				'duties' => array(
    					"
    					- I was involved in the company's internationalization process, working with technology that allows for a high number of requests to be processed, especially during peak promotional events - such as Black Friday - using the following technologies: RabbitMQ, Memcache.\n
    					- I have been part of a team of other Developers, using Scrum as a development model. The system featured weekly meetings with clients, as well as grooming and retrospective sessions in order to ensure that all developers were actively involved in the overall architecture of the applications.\n
    					- Developed a high understanding of the retail business, and interacted with a number of departments within the company in order to facilitate the features that were required, and to help with integrating business requirements across all areas.\n
						"
    				)
    			),

				array(
    				'company' => 'Matriculate LLC',
    				'info' => array(
    					'Matriculate is a gamification and social loyalty design and development studio.'
    				),
    				'location' => array(
    					'city' => 'Los Angeles, CA',
    					'country' => 'United States'
    				),
    				'title'	  => 'Senior Front-End Developer',
    				'startDate' => 'April, 2012',
    				'endDate'	=> 'March, 2013',
    				'duties' => array(
    					"
    					- My duties were to configure the main back-end/front-end architecture and agree on what design patterns/frameworks to use - this helped me obtaining experience with different javascript-based technologies, such as jQuery/jQuery UI, Backbone and various API's such as Facebook, Twitter and other social engines integration helpers\n
    					- Configured all the LAMP Stack using CentOS on an Amazon EC2.\n
    					- Contributed on configuring AMI's (Amazon Machine Images) for each step of development (Dev, Testing, Staging, Production).\n
    					- Main PHP Back-end frameworks used were CodeIgniter for the web generation mechanism and Zend Framework for web services.\n\n
    					- Git has been used as the versioning system, which helped me in achieving more knowledge about Git functionalities, but also the advantages of sub-modules, and why they should be used.\n
    					- A second duty has been to contribute on the front-end development using HTML5 , CSS/CSS3 (compatibility mode implementations) based on the PSD's provided - this helped me earn more experience in design workflows, allowed me to start using sprites in my implementations, and also CSS3 functions which helped the browser work faster and load all resources at good speed allowing the end-user to receive a great browsing experience.\n
    					
						"
    				)
    			),

				array(
    				'company' => 'Matriculate LLC',
    				'info' => array(
    					'Matriculate is a gamification and social loyalty design and development studio.'
    				),
    				'location' => array(
    					'city' => 'Los Angeles, CA',
    					'country' => 'United States'
    				),
    				'title'	  => 'Senior Front-End Developer',
    				'startDate' => 'April, 2012',
    				'endDate'	=> 'March, 2013',
    				'duties' => array(
    					"
    					- My duties were to configure the main back-end/front-end architecture and agree on what design patterns/frameworks to use - this helped me obtaining experience with different javascript-based technologies, such as jQuery/jQuery UI, Backbone and various API's such as Facebook, Twitter and other social engines integration helpers\n
    					- Configured all the LAMP Stack using CentOS on an Amazon EC2.\n
    					- Contributed on configuring AMI's (Amazon Machine Images) for each step of development (Dev, Testing, Staging, Production).\n
    					- Main PHP Back-end frameworks used were CodeIgniter for the web generation mechanism and Zend Framework for web services.\n\n
    					- Git has been used as the versioning system, which helped me in achieving more knowledge about Git functionalities, but also the advantages of sub-modules, and why they should be used.\n
    					- A second duty has been to contribute on the front-end development using HTML5 , CSS/CSS3 (compatibility mode implementations) based on the PSD's provided - this helped me earn more experience in design workflows, allowed me to start using sprites in my implementations, and also CSS3 functions which helped the browser work faster and load all resources at good speed allowing the end-user to receive a great browsing experience.\n\n
    					Accomplishments:\n
    					\t- Developed a fully-functional JavaScript framework, offering customers an iPad/Tablet application, which features a nice UI/UX, fast loading and processing of requests.\n
						"
    				)
    			),

				array(
    				'company' => 'navX Content Factory',
    				'info' => array(
    					'NavX is a company with headquarters based in Paris, France, that was founded on December 28, 2005.'
    				),
    				'location' => array(
    					'city' => 'Paris',
    					'country' => 'France'
    				),
    				'title'	  => 'PHP Developer',
    				'startDate' => 'April, 2011',
    				'endDate'	=> 'March, 2012',
    				'duties' => array(
    					"
    					- The main duties were to maintain the Intranet back-end / front-end system, which was vital for the operations department, responsible with collecting and inputting gas stations, points of interests and other data.\n
    					- Maintain the MySQL database and offer support for system administration to optimize queries (using indexes and syntax analysis).\n
    					- Created web data collectors using Selenium, Zend Dom parser, Xpath, regular expressions in PHP (PCRE).\n
    					- Maintaining DRDA System (Data Retriever/Data Analyzer/Data Converter/Data Injector), which was the main system that automated work of the data-entry operators. This was helpful gaining experience with a lot of file formats such as KML, XML, TomTom, TeleAtlas, Garmin and other GPS Systems formats.\n
    					- Integrated The France CIC Payment System.\n
    					- Developed a full application for Peugeot Cars that is along-side the Bouygues Telecom internet services. This helped me understand a variety of javascript object-oriented design patterns.\n\n
    					Accomplishments :\n
    					- The launch of the projects was successful, and work has been delivered before the due date.\n
    					- The company has featured a substantial growth and right now it handles a lot of other contracts.\n
    					- Personally, I have learned to adapt and focus on the objective.\n
						"
    				)
    			),

				array(
    				'company' => 'Vodafone Romania SA',
    				'info' => array(
    					'Vodafone is one of the world\'s leading telecommunications companies.'
    				),
    				'location' => array(
    					'city' => 'Paris',
    					'country' => 'France'
    				),
    				'title'	  => 'PHP Developer',
    				'startDate' => 'February, 2009',
    				'endDate'	=> 'October, 2010',
    				'duties' => array(
    					"
    					- My primary duty was to maintain the Accounts Receivable Payments databases, to perform a daily import of back payments files and to contribute by helping other colleagues on daily reconciliation.\n
    					- My secondary duty was related to recurring management and functionality supervision of production systems.\n\n
    					- Consultancy and support (per-project basis) to various departments.\n
    					- Catch and report functionality issues, assist the development team in finding required solutions.\n
    					- Flow analysis and functionality tests/improvements, coordination with other departments in providing improvement guidelines.\n
    					- Consultancy for AMDOCS on Accounts Receivables Application.\n
    					- Development of web-based software application providing integration between Account Management, Call Center and Sales department regarding financial accounts and payment status.\n\n
    					Accomplishments :\n
    					- Helped the Accounts Receivable department by reducing a manday to ~ 5/10 minutes per day for unallocated payments process.\n
    					- Helped daily reconciliation process by reducing the time using the new Excel application.\n
    				    - Recommendation received : http://tinyurl.com/c5b8l7t\n
    				
						"
    				)
    			),

				array(
    				'company' => 'Romtelecom SA',
    				'info' => array(
    					'Romtelecom SA Is a state company that provides telephony services, Satellite TV & Internet in Romania.'
    				),
    				'location' => array(
    					'city' => 'Paris',
    					'country' => 'France'
    				),
    				'title'	  => 'PHP Developer',
    				'startDate' => 'February, 2009',
    				'endDate'	=> 'October, 2010',
    				'duties' => array(
    					"
    					- Internet product and service promotions . Data/IP/VPN contracting and customization;\n
    					- Troubleshooting and assistance for Data/IP/VPN customers;\n
    					- IP-Level debugging for CPI equipment;\n
    					- Set up and configuration for domain reservation, hosting provisioning, bandwidth management;\n\n

    					Accomplishments :\n

    					- Development of in-house software to record and centralize per-shift tasks assignments;\n
    					- Application development to generate visual graphs and alerts regarding status of DSL lines ( SNR , circuit failure , link status )
						"
    				)
    			)
    		),

			'skills' => array(
					'PHP', 'Java J2SE', 'Fluent with Java J2EE', 'Ruby on Rails', 
					'Bash Scripting', 'Unix/Linux ( Ubuntu, Debian and small knowledge of CentOS)', 
					'Apple MAC / iPhone', 'jQuery', 'AngularJS', 'node.js', 'HTML', 'HTML5', 'CSS', 'CSS3',
					'Agile Methodologies', 'Project Planning', 'Project Management', 'SCRUM', 'Procedural scripting',
					'OOP', 'MySQL', 'Basic Oracle 9i , 11g knowledge', 'Ability to work with legacy code'
			),

			'certifications' => array(
				array(
					'name' => 'Zend PHP 5.3',
					'verification_link' => 'http://www.zend.com/store/education/certification/yellow-pages.php#show-ClientCandidateID%3DZEND023779'
				),

				array(
					'name' => 'Brainbench PHP',
					'verification_link' => 'http://www.brainbench.com/content/transcript/topicdetail.do?testid=11465391'
				)
			),

			'courses' => array(
				'JAVA Programming', 'PHP Advanced & Best Practices', 'Time Management', 
				'Agile Development', 'Customer Operations', 'Value-Based Orientations'
			)
 
    	);
    	
    	$d = json_encode($my);
    
		return $this->render('WorkMainSiteBundle:Default:resume.html.twig', array('d' => $d ));
        
    }
	

}
