<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class TaskQueueEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

    /**
     * @var int
     */
    protected $ProcessStep;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfErrorEntity
     */
    protected $Errors;

    /**
     * @return int
     */
    public function getProcessStep()
    {
        return $this->ProcessStep;
    }

    /**
     * @param int $ProcessStep
     * @return TaskQueueEntity
     */
    public function withProcessStep($ProcessStep)
    {
        $new = clone $this;
        $new->ProcessStep = $ProcessStep;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfErrorEntity
     */
    public function getErrors()
    {
        return $this->Errors;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfErrorEntity $Errors
     * @return TaskQueueEntity
     */
    public function withErrors($Errors)
    {
        $new = clone $this;
        $new->Errors = $Errors;

        return $new;
    }


}

