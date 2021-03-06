<?php

declare(strict_types=1);

namespace Viserio\Component\Cookie\Tests\Container\Provider\Compiled;

/**
 * This class has been auto-generated by Viserio Container Component.
 */
final class CookieServiceProviderContainer extends \Viserio\Component\Container\AbstractCompiledContainer
{
    /**
     * Create a new Compiled Container instance.
     */
    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->parameters = [
            'viserio' => [
                'cookie' => [
                    'domain' => '',
                    'path' => '',
                    'secure' => true,
                ],
            ],
        ];
        $this->methodMapping = [
            \Viserio\Component\Config\Command\ConfigDumpCommand::class => 'get88001f5d55ce57598db2e5b80611a49d605be7b037e634e18ca2493683a114ee',
            \Viserio\Component\Config\Command\ConfigReaderCommand::class => 'get91fd613885c83bb4b00b29ee3e879446444b7ecad7fdd0292ef1df30bdfa3884',
            \Viserio\Contract\Cookie\QueueingFactory::class => 'getbeb63a62884b5b50596eba5f7f451706f660638f6bcdb8811d0670f6d5a77a59',
        ];
        $this->aliases = [
            \Viserio\Component\Cookie\CookieJar::class => \Viserio\Contract\Cookie\QueueingFactory::class,
            'cookie' => \Viserio\Contract\Cookie\QueueingFactory::class,
        ];
    }

    /**
     * Returns the public Viserio\Component\Config\Command\ConfigDumpCommand shared service.
     *
     * @return \Viserio\Component\Config\Command\ConfigDumpCommand
     */
    protected function get88001f5d55ce57598db2e5b80611a49d605be7b037e634e18ca2493683a114ee(): \Viserio\Component\Config\Command\ConfigDumpCommand
    {
        return $this->services[\Viserio\Component\Config\Command\ConfigDumpCommand::class] = new \Viserio\Component\Config\Command\ConfigDumpCommand();
    }

    /**
     * Returns the public Viserio\Component\Config\Command\ConfigReaderCommand shared service.
     *
     * @return \Viserio\Component\Config\Command\ConfigReaderCommand
     */
    protected function get91fd613885c83bb4b00b29ee3e879446444b7ecad7fdd0292ef1df30bdfa3884(): \Viserio\Component\Config\Command\ConfigReaderCommand
    {
        return $this->services[\Viserio\Component\Config\Command\ConfigReaderCommand::class] = new \Viserio\Component\Config\Command\ConfigReaderCommand();
    }

    /**
     * Returns the public Viserio\Contract\Cookie\QueueingFactory shared service.
     *
     * @return \Viserio\Component\Cookie\CookieJar
     */
    protected function getbeb63a62884b5b50596eba5f7f451706f660638f6bcdb8811d0670f6d5a77a59(): \Viserio\Component\Cookie\CookieJar
    {
        $this->services[\Viserio\Contract\Cookie\QueueingFactory::class] = $instance = new \Viserio\Component\Cookie\CookieJar();

        $instance->setDefaultPathAndDomain($this->getParameter('viserio.cookie.path'), $this->getParameter('viserio.cookie.domain'), $this->getParameter('viserio.cookie.secure'));

        return $instance;
    }

    /**
     * {@inheritdoc}
     */
    public function getRemovedIds(): array
    {
        return [
            \Psr\Container\ContainerInterface::class => true,
            \Viserio\Contract\Container\CompiledContainer::class => true,
            \Viserio\Contract\Container\Factory::class => true,
            \Viserio\Contract\Container\TaggedContainer::class => true,
            'container' => true,
        ];
    }
}
