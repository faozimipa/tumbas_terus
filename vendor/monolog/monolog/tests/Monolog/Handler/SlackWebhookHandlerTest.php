<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Handler;

use Monolog\TestCase;
use Monolog\Logger;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\Slack\SlackRecord;

/**
 * @author Haralan Dobrev <hkdobrev@gmail.com>
 * @see    https://api.slack.com/incoming-webhooks
 * @coversDefaultClass Monolog\Handler\SlackWebhookHandler
 */
class SlackWebhookHandlerTest extends TestCase
{
    const WEBHOOK_URL = 'https://hooks.slack.com/services/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E';

    /**
     * @covers ::__construct
     * @covers ::getSlackRecord
     */
    public function testConstructorMinimal()
    {
        $handler = new SlackWebhookHandler(self::WEBHOOK_URL);
<<<<<<< HEAD
        $record = $this->getRecord();
        $slackRecord = $handler->getSlackRecord();
        $this->assertInstanceOf('Monolog\Handler\Slack\SlackRecord', $slackRecord);
        $this->assertEquals(array(
=======
        $slackRecord = $handler->getSlackRecord();
        $this->assertInstanceOf('Monolog\Handler\Slack\SlackRecord', $slackRecord);
        $this->assertEquals(array(
            'username' => 'Monolog',
            'text' => '',
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
            'attachments' => array(
                array(
                    'fallback' => 'test',
                    'text' => 'test',
                    'color' => SlackRecord::COLOR_WARNING,
                    'fields' => array(
                        array(
                            'title' => 'Level',
                            'value' => 'WARNING',
<<<<<<< HEAD
                            'short' => false,
                        ),
                    ),
                    'title' => 'Message',
                    'mrkdwn_in' => array('fields'),
                    'ts' => $record['datetime']->getTimestamp(),
                ),
            ),
        ), $slackRecord->getSlackData($record));
=======
                            'short' => true,
                        ),
                    ),
                    'title' => 'Message',
                ),
            ),
        ), $slackRecord->getSlackData($this->getRecord()));
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    }

    /**
     * @covers ::__construct
     * @covers ::getSlackRecord
     */
    public function testConstructorFull()
    {
        $handler = new SlackWebhookHandler(
            self::WEBHOOK_URL,
            'test-channel',
            'test-username',
            false,
            ':ghost:',
            false,
            false,
            Logger::DEBUG,
            false
        );

        $slackRecord = $handler->getSlackRecord();
        $this->assertInstanceOf('Monolog\Handler\Slack\SlackRecord', $slackRecord);
        $this->assertEquals(array(
            'username' => 'test-username',
            'text' => 'test',
            'channel' => 'test-channel',
            'icon_emoji' => ':ghost:',
        ), $slackRecord->getSlackData($this->getRecord()));
    }

    /**
     * @covers ::getFormatter
     */
    public function testGetFormatter()
    {
        $handler = new SlackWebhookHandler(self::WEBHOOK_URL);
        $formatter = $handler->getFormatter();
        $this->assertInstanceOf('Monolog\Formatter\FormatterInterface', $formatter);
    }

    /**
     * @covers ::setFormatter
     */
    public function testSetFormatter()
    {
        $handler = new SlackWebhookHandler(self::WEBHOOK_URL);
        $formatter = new LineFormatter();
        $handler->setFormatter($formatter);
        $this->assertSame($formatter, $handler->getFormatter());
    }
}
