<?php

namespace QEEP\QEEPApiClient\V2\Model;

use JMS\Serializer\Annotation as JMS;

class CustomQuestion
{
    /** @JMS\Type("integer") */
    protected $id;

    /** @JMS\Type("string") */
    protected $name;

    /** @JMS\Type("string") */
    protected $body;

    /** @JMS\Type("array<string>") */
    protected $answers;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): CustomQuestion
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): CustomQuestion
    {
        $this->name = $name;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(string $body): CustomQuestion
    {
        $this->body = $body;

        return $this;
    }

    public function getAnswers(): array
    {
        return $this->answers;
    }

    public function setAnswers(array $answers): CustomQuestion
    {
        $this->answers = $answers;

        return $this;
    }
}
