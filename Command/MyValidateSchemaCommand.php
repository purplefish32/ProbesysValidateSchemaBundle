<?php
namespace Probesys\ValidateSchemaBundle\Command;
 
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\DoctrineBundle\Command\Proxy\DoctrineCommandHelper;
use Doctrine\ORM\Tools\Console\Command\ValidateSchemaCommand;
 
class MyValidateSchemaCommand extends ValidateSchemaCommand
{
	protected function configure()
	{
		parent::configure();
		$this->setName('probesys:doctrine:orm:validate-schema');
		$this->addOption('em', null, InputOption::VALUE_OPTIONAL, 'The entity manager to use for this command');
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		DoctrineCommandHelper::setApplicationEntityManager($this->getApplication(), $input->getOption('em'));
 
                return parent::execute($input, $output);
	}
}
