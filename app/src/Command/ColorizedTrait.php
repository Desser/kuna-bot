<?php

namespace App\Command;

use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Trait ColorizedTrait
 * @package App\Command
 */
trait ColorizedTrait
{
    /**
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     */
    protected function setColors(OutputInterface $output)
    {
        $output->getFormatter()->setStyle('r', new OutputFormatterStyle('red', null));
        $output->getFormatter()->setStyle('g', new OutputFormatterStyle('green', null));
        $output->getFormatter()->setStyle('y', new OutputFormatterStyle('yellow', null));
        $output->getFormatter()->setStyle('b', new OutputFormatterStyle('blue', null));
        $output->getFormatter()->setStyle('m', new OutputFormatterStyle('magenta', null));
        $output->getFormatter()->setStyle('c', new OutputFormatterStyle('cyan', null));
        $output->getFormatter()->setStyle('w', new OutputFormatterStyle('white', null));
    }
}
