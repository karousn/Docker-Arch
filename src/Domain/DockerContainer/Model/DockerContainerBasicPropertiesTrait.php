<?php

namespace Ph3\DockerArch\Domain\DockerContainer\Model;

/**
 * @author Cédric Dugat <cedric@dugat.me>
 */
trait DockerContainerBasicPropertiesTrait
{
    /**
     * @var string
     */
    protected $from;

    /**
     * @var string
     */
    protected $maintainer;

    /**
     * @var string
     */
    protected $working_dir;

    /**
     * @var string
     */
    protected $entry_point;

    /**
     * @var string
     */
    protected $user;

    /**
     * @return string
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }

    /**
     * @param string $from
     *
     * @return self
     */
    public function setFrom(string $from): self
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkingDir(): ?string
    {
        return $this->working_dir;
    }

    /**
     * @param string $working_dir
     *
     * @return self
     */
    public function setWorkingDir(string $working_dir): self
    {
        $this->working_dir = $working_dir;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntryPoint(): ?string
    {
        return $this->entry_point;
    }

    /**
     * @param string $entry_point
     *
     * @return self
     */
    public function setEntryPoint(string $entry_point): self
    {
        $this->entry_point = $entry_point;

        return $this;
    }

    /**
     * @return string
     */
    public function getMaintainer(): ?string
    {
        return $this->maintainer;
    }

    /**
     * @param string $maintainer
     *
     * @return self
     */
    public function setMaintainer(string $maintainer): self
    {
        $this->maintainer = $maintainer;

        return $this;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user)
    {
        $this->user = $user;

        return $this;
    }
}
