<?php
namespace CodeNet\KKClient\Response;

use CodeNet\KKClient\Resource\InpostMachine;
use CodeNet\KKClient\Response;

class InpostMachinesResponse extends Response
{
    /**
     * @var InpostMachine[]
     */
    protected $machines;

    /**
     * @return \CodeNet\KKClient\Resource\InpostMachine[]
     */
    public function getMachines()
    {
        return $this->machines;
    }

    /**
     * @param InpostMachine $machine
     */
    public function addMachine($machine)
    {
        if (!$machine instanceof InpostMachine) {
            $machine = new InpostMachine($machine);
        }
        $this->machines[] = $machine;
    }
}