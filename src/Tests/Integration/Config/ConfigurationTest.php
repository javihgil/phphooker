<?php

namespace Tests\Integration\Config;

use Jhg\PhpHooker\Config\Configuration;
use Symfony\Component\Config\Definition\Processor;

/**
 * Class ConfigurationTest
 *
 * @package Tests\Integration\Config
 */
class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return array
     */
    public function configurationProvider()
    {
        return [
            // default configuration
            [
                [],
                [
                    'debug' => false,
                    'global' => [],
                    'checkers' => [],
                ],
            ],

            // debug true configuration
            [
                [
                    'debug' => true
                ],
                [
                    'debug' => true,
                    'global' => [],
                    'checkers' => [],
                ],
            ],

            // global configuration
            [
                [
                    'global' => [
                        'boolean' => true,
                        'string' => 'test',
                        'integer' => 1923,
                        'array' => [
                            'test' => 'ok',
                        ]
                    ]
                ],
                [
                    'debug' => false,
                    'global' => [
                        'boolean' => true,
                        'string' => 'test',
                        'integer' => 1923,
                        'array' => [
                            'test' => 'ok',
                        ]
                    ],
                    'checkers' => [],
                ],
            ],

            // custom checkers configuration
            [
                [
                    'checkers' => [
                        'test' => 'Class\\Complete\\Path',
                        'test2' => 'Class\\Complete\\Path',
                    ]
                ],
                [
                    'debug' => false,
                    'global' => [],
                    'checkers' => [
                        'test' => 'Class\\Complete\\Path',
                        'test2' => 'Class\\Complete\\Path',
                    ],
                ],
            ],

            // pre-commit hook configuration
            [
                [
                    'pre_commit' => [
                        'boolean' => true,
                        'string' => 'test',
                        'integer' => 1923,
                        'array' => [
                            'test' => 'ok',
                        ]
                    ]
                ],
                [
                    'debug' => false,
                    'global' => [],
                    'checkers' => [],
                    'pre_commit' => [
                        'boolean' => true,
                        'string' => 'test',
                        'integer' => 1923,
                        'array' => [
                            'test' => 'ok',
                        ]
                    ]
                ],
            ],

            // commit-msg hook configuration
            [
                [
                    'commit_msg' => [
                        'boolean' => true,
                        'string' => 'test',
                        'integer' => 1923,
                        'array' => [
                            'test' => 'ok',
                        ]
                    ]
                ],
                [
                    'debug' => false,
                    'global' => [],
                    'checkers' => [],
                    'commit_msg' => [
                        'boolean' => true,
                        'string' => 'test',
                        'integer' => 1923,
                        'array' => [
                            'test' => 'ok',
                        ]
                    ]
                ],
            ],
        ];
    }

    /**
     * @param array $phphookerConfig
     * @param array $expectedConfig
     *
     * @dataProvider configurationProvider
     */
    public function testProcessConfiguration(array $phphookerConfig, array $expectedConfig)
    {
        $configuration = new Configuration();
        $processor = new Processor();

        $returnedConfig = $processor->processConfiguration($configuration, ['phphooker' => $phphookerConfig]);

        $this->assertEquals($expectedConfig, $returnedConfig);
    }
}
