<?php

namespace QEEP\QEEPApiClient\Model;

class Question
{
    protected $id;

    protected $name;

    protected $body;

    protected $answers;

    public function __construct()
    {
        $this->answers = [];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): Question
    {
        $this->id = $id;

        return $this;
    }

    // QEEP-Pro отдает `code` вместо `id`

    public function setCode(int $code): Question
    {
        $this->id = $code;

        return $this;
    }

    public function getCode(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): Question
    {
        $this->name = $name;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(string $body): Question
    {
        $this->body = $body;

        return $this;
    }

    public function getAnswers(): array
    {
        return $this->answers;
    }

    public function setAnswers(array $answers): Question
    {
        // Due to format of QEEP-Pro API
        $this->answers = array_map(function ($object) {
            return $object['body'];
        }, $answers);

        return $this;
    }
}
