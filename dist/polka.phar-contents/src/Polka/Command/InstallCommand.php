<?php

/**
 * This file is part of Polka
 */

namespace Polka\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Polka\Installer\BaseInstaller;

class InstallCommand extends Command
{
	private $baseInstaller;

	public function __construct()
	{
		$this->baseInstaller = new BaseInstaller;
	}

	protected function configure()
	{
		$this
			->setName('install')
			->setDescription('Get ready to dance, it\'s time to Polka')
			->setHelp("Use this command to install Polka.")
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output, BaseInstaller $baseInstaller)
	{
		$output->writeln($baseInstaller);
	}
}