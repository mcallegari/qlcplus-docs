<?php
namespace Grav\Plugin\Console;

use Github\Api\Enterprise\License;
use Grav\Common\GPM\Licenses;
use Grav\Console\ConsoleCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

/**
 * Class AddLicenseCommand
 *
 * @package Grav\Plugin\Console
 */
class AddLicenseCommand extends ConsoleCommand
{
    /**
     *
     */
    protected function configure()
    {
        $this
            ->setName("add")
            ->setDescription("Adds a license")
            ->addOption(
                'slug',
                's',
                InputOption::VALUE_REQUIRED,
                'The product slug (e.g. admin-pro)'
            )
            ->addOption(
                'license',
                'l',
                InputOption::VALUE_REQUIRED,
                'The product license (received when you purchased the product)'
            )
            ->setHelp('The <info>add command</info> adds a license entry for a premium plugin/theme')
        ;
    }

    /**
     * @return int|null|void
     */
    protected function serve()
    {
        $this->output->writeln('<magenta>Adding License</magenta>');
        $this->output->writeln('');

        $slug = $this->input->getOption('slug');
        $license = $this->input->getOption('license');

        if (!$slug) {
            $this->output->writeln('<red>Invalid command.</red>');
            $this->output->writeln('');
            $this->output->writeln('To <yellow>add</yellow> a license, use:');
            $this->output->writeln(' -> <cyan>bin/plugin license-manager add -s <slug> -l <license></cyan>');
            exit;
        }

        if (!$license) {
            $this->output->writeln('<red>Not enough parameters.</red>');
            $this->output->writeln('');
            $this->output->writeln('To <yellow>add</yellow> a license, use:');
            $this->output->writeln(' -> <cyan>bin/plugin license-manager add -s <slug> -l <license></cyan>');
            $this->output->writeln('');
            $this->output->writeln('To <yellow>remove</yellow> a license, use:');
            $this->output->writeln(' -> <cyan>bin/plugin license-manager remove -s <slug>');
            exit;
        }

        $insert = Licenses::set($slug, $license);

        if ($insert) {
            $this->output->writeln('Successfully added license for: <cyan>' . $slug . '</cyan> = <yellow>'. $license . '</yellow>');
        } else {
            if (Licenses::validate($license)) {
                $this->output->writeln('An error occurred while trying to add the license for <cyan>' . $slug . '</cyan>. Perhaps an invalid License?');
            } else {
                $this->output->writeln('An <red>error</red> occurred while trying to add the license for <cyan>' . $slug . '</cyan>.');
                $this->output->writeln('The License is not matching a valid format.');
            }
        }
    }

}

