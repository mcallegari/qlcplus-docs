<?php
namespace Grav\Plugin\Console;

use Github\Api\Enterprise\License;
use Grav\Common\GPM\Licenses;
use Grav\Console\ConsoleCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use League\CLImate\CLImate;

/**
 * Class GetLicensesCommand
 *
 * @package Grav\Plugin\Console
 */
class GetLicensesCommand extends ConsoleCommand
{
    /**
     *
     */
    protected function configure()
    {
        $this
            ->setName("get")
            ->setDescription("Adds a license")
            ->addOption(
                'slug',
                's',
                InputOption::VALUE_OPTIONAL,
                'The product slug (e.g. admin-pro)'
            )
            ->setHelp('The <info>get command</info> displays a license entry for a premium plugin/theme')
        ;
    }

    /**
     * @return int|null|void
     */
    protected function serve()
    {
        $this->output->writeln('');
        $this->output->writeln('<magenta>Displaying License</magenta>');
        $this->output->writeln('');

        $slug = $this->input->getOption('slug', null);

        $licenses = Licenses::get($slug);

        if (!is_array($licenses)) {
            $licenses = array_filter([$slug => $licenses]);
        }

        if (empty($licenses)) {
            $this->output->writeln('<yellow>No licenses found...</yellow>');
        } else {
            $this->output->writeln('Found <cyan>' . count($licenses) . '</cyan> license' . (count($licenses) > 1 ? 's' : ''));
            $this->output->writeln('');

            $climate = new CLImate;
            $climate->extend('Grav\Console\TerminalObjects\Table');

            $table = [];
            foreach ($licenses as $slug => $license) {
                $table[] = [
                    'Product' => '<cyan>' . $slug . '</cyan>',
                    'License' => '<yellow>' . $license . '</yellow>'
                ];
            }

            $climate->table($table);
        }

    }

}

