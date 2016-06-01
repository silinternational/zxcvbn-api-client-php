<?php
namespace Zxcvbn;

use Zxcvbn\BaseClient;

/**
 * @method array getFull(array $config = [])
 * @method array getScore(array $config = [])
 */
class Score extends BaseClient
{
    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        // Apply some defaults.
        $config += [
            'description_path' => __DIR__ . '/api-description.php',
        ];

        // Create the client.
        parent::__construct(
            $config
        );

    }
}