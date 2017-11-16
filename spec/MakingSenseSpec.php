<?php

namespace spec;

use MakingSense;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MakingSenseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MakingSense::class);
    }

    function it_translate_1_makingsense()
    {
        $this->execute(1)->shouldReturn(1);
    }

    function it_translate_2_makingsense()
    {
        $this->execute(2)->shouldReturn(2);
    }

    function it_translate_3_makingsense()
    {
        $this->execute(3)->shouldReturn('Making');
    }

    function it_translate_4_makingsense()
    {
        $this->execute(4)->shouldReturn(4);
    }

    function it_translate_5_makingsense()
    {
        $this->execute(5)->shouldReturn('Sense');
    }

    function it_translate_6_makingsense()
    {
        $this->execute(6)->shouldReturn('Making');
    }

    function it_translate_10_makingsense()
    {
        $this->execute(10)->shouldReturn('Sense');
    }

    function it_translate_15_makingsense()
    {
        $this->execute(15)->shouldReturn('MakingSense');
    }

    function it_translate_50_makingsense()
    {
        $this->execute(50)->shouldReturn('Sense');
    }

    function it_translate_90_makingsense()
    {
        $this->execute(90)->shouldReturn('MakingSense');
    }

    function it_translate_150_makingsense()
    {
        $this->execute(150)->shouldReturn('MakingSense');
    }

    function it_translate_500_makingsense()
    {
        $this->execute(500)->shouldReturn('Sense');
    }
}
