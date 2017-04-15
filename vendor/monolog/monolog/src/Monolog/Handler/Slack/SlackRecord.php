<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Handler\Slack;

use Monolog\Logger;
<<<<<<< HEAD
use Monolog\Formatter\NormalizerFormatter;
=======
use Monolog\Formatter\LineFormatter;
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
use Monolog\Formatter\FormatterInterface;

/**
 * Slack record utility helping to log to Slack webhooks or API.
 *
 * @author Greg Kedzierski <greg@gregkedzierski.com>
 * @author Haralan Dobrev <hkdobrev@gmail.com>
 * @see    https://api.slack.com/incoming-webhooks
 * @see    https://api.slack.com/docs/message-attachments
 */
class SlackRecord
{
    const COLOR_DANGER = 'danger';

    const COLOR_WARNING = 'warning';

    const COLOR_GOOD = 'good';

    const COLOR_DEFAULT = '#e3e4e6';

    /**
     * Slack channel (encoded ID or name)
     * @var string|null
     */
    private $channel;

    /**
     * Name of a bot
<<<<<<< HEAD
     * @var string|null
=======
     * @var string
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     */
    private $username;

    /**
<<<<<<< HEAD
     * User icon e.g. 'ghost', 'http://example.com/user.png'
     * @var string
     */
    private $userIcon;
=======
     * Emoji icon name
     * @var string
     */
    private $iconEmoji;
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b

    /**
     * Whether the message should be added to Slack as attachment (plain text otherwise)
     * @var bool
     */
    private $useAttachment;

    /**
     * Whether the the context/extra messages added to Slack as attachments are in a short style
     * @var bool
     */
    private $useShortAttachment;

    /**
     * Whether the attachment should include context and extra data
     * @var bool
     */
    private $includeContextAndExtra;

    /**
<<<<<<< HEAD
     * Dot separated list of fields to exclude from slack message. E.g. ['context.field1', 'extra.field2']
     * @var array
     */
    private $excludeFields;

    /**
=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @var FormatterInterface
     */
    private $formatter;

    /**
<<<<<<< HEAD
     * @var NormalizerFormatter
     */
    private $normalizerFormatter;

    public function __construct($channel = null, $username = null, $useAttachment = true, $userIcon = null, $useShortAttachment = false, $includeContextAndExtra = false, array $excludeFields = array(), FormatterInterface $formatter = null)
    {
        $this->channel = $channel;
        $this->username = $username;
        $this->userIcon = trim($userIcon, ':');
        $this->useAttachment = $useAttachment;
        $this->useShortAttachment = $useShortAttachment;
        $this->includeContextAndExtra = $includeContextAndExtra;
        $this->excludeFields = $excludeFields;
        $this->formatter = $formatter;

        if ($this->includeContextAndExtra) {
            $this->normalizerFormatter = new NormalizerFormatter();
=======
     * @var LineFormatter
     */
    private $lineFormatter;

    public function __construct($channel = null, $username = 'Monolog', $useAttachment = true, $iconEmoji = null, $useShortAttachment = false, $includeContextAndExtra = false, FormatterInterface $formatter = null)
    {
        $this->channel = $channel;
        $this->username = $username;
        $this->iconEmoji = trim($iconEmoji, ':');
        $this->useAttachment = $useAttachment;
        $this->useShortAttachment = $useShortAttachment;
        $this->includeContextAndExtra = $includeContextAndExtra;
        $this->formatter = $formatter;

        if ($this->includeContextAndExtra) {
            $this->lineFormatter = new LineFormatter();
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
        }
    }

    public function getSlackData(array $record)
    {
<<<<<<< HEAD
        $dataArray = array();
        $record = $this->excludeFields($record);

        if ($this->username) {
            $dataArray['username'] = $this->username;
        }
=======
        $dataArray = array(
            'username'    => $this->username,
            'text'        => '',
        );
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b

        if ($this->channel) {
            $dataArray['channel'] = $this->channel;
        }

<<<<<<< HEAD
        if ($this->formatter && !$this->useAttachment) {
=======
        if ($this->formatter) {
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
            $message = $this->formatter->format($record);
        } else {
            $message = $record['message'];
        }

        if ($this->useAttachment) {
            $attachment = array(
<<<<<<< HEAD
                'fallback'  => $message,
                'text'      => $message,
                'color'     => $this->getAttachmentColor($record['level']),
                'fields'    => array(),
                'mrkdwn_in' => array('fields'),
                'ts'        => $record['datetime']->getTimestamp()
=======
                'fallback' => $message,
                'text'     => $message,
                'color'    => $this->getAttachmentColor($record['level']),
                'fields'   => array(),
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
            );

            if ($this->useShortAttachment) {
                $attachment['title'] = $record['level_name'];
            } else {
                $attachment['title'] = 'Message';
<<<<<<< HEAD
                $attachment['fields'][] = $this->generateAttachmentField('Level', $record['level_name']);
            }


=======
                $attachment['fields'][] = $this->generateAttachmentField('Level', $record['level_name'], true);
            }

>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
            if ($this->includeContextAndExtra) {
                foreach (array('extra', 'context') as $key) {
                    if (empty($record[$key])) {
                        continue;
                    }

                    if ($this->useShortAttachment) {
                        $attachment['fields'][] = $this->generateAttachmentField(
                            ucfirst($key),
<<<<<<< HEAD
                            $record[$key]
=======
                            $this->stringify($record[$key]),
                            true
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
                        );
                    } else {
                        // Add all extra fields as individual fields in attachment
                        $attachment['fields'] = array_merge(
                            $attachment['fields'],
                            $this->generateAttachmentFields($record[$key])
                        );
                    }
                }
            }

            $dataArray['attachments'] = array($attachment);
        } else {
            $dataArray['text'] = $message;
        }

<<<<<<< HEAD
        if ($this->userIcon) {
            if (filter_var($this->userIcon, FILTER_VALIDATE_URL)) {
                $dataArray['icon_url'] = $this->userIcon;
            } else {
                $dataArray['icon_emoji'] = ":{$this->userIcon}:";
            }
=======
        if ($this->iconEmoji) {
            $dataArray['icon_emoji'] = ":{$this->iconEmoji}:";
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
        }

        return $dataArray;
    }

    /**
     * Returned a Slack message attachment color associated with
     * provided level.
     *
     * @param  int    $level
     * @return string
     */
    public function getAttachmentColor($level)
    {
        switch (true) {
            case $level >= Logger::ERROR:
                return self::COLOR_DANGER;
            case $level >= Logger::WARNING:
                return self::COLOR_WARNING;
            case $level >= Logger::INFO:
                return self::COLOR_GOOD;
            default:
                return self::COLOR_DEFAULT;
        }
    }

    /**
     * Stringifies an array of key/value pairs to be used in attachment fields
     *
<<<<<<< HEAD
     * @param array $fields
     *
     * @return string
     */
    public function stringify($fields)
    {
        $normalized = $this->normalizerFormatter->format($fields);
        $prettyPrintFlag = defined('JSON_PRETTY_PRINT') ? JSON_PRETTY_PRINT : 128;

        $hasSecondDimension = count(array_filter($normalized, 'is_array'));
        $hasNonNumericKeys = !count(array_filter(array_keys($normalized), 'is_numeric'));

        return $hasSecondDimension || $hasNonNumericKeys
            ? json_encode($normalized, $prettyPrintFlag)
            : json_encode($normalized);
=======
     * @param  array  $fields
     * @return string|null
     */
    public function stringify($fields)
    {
        if (!$this->lineFormatter) {
            return null;
        }

        $string = '';
        foreach ($fields as $var => $val) {
            $string .= $var.': '.$this->lineFormatter->stringify($val)." | ";
        }

        $string = rtrim($string, " |");

        return $string;
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    }

    /**
     * Sets the formatter
     *
     * @param FormatterInterface $formatter
     */
    public function setFormatter(FormatterInterface $formatter)
    {
        $this->formatter = $formatter;
    }

    /**
     * Generates attachment field
     *
     * @param string $title
<<<<<<< HEAD
     * @param string|array $value\
     *
     * @return array
     */
    private function generateAttachmentField($title, $value)
    {
        $value = is_array($value)
            ? sprintf('```%s```', $this->stringify($value))
            : $value;

        return array(
            'title' => $title,
            'value' => $value,
            'short' => false
=======
     * @param string|array $value
     * @param bool $short
     * @return array
     */
    private function generateAttachmentField($title, $value, $short)
    {
        return array(
            'title' => $title,
            'value' => is_array($value) ? $this->lineFormatter->stringify($value) : $value,
            'short' => $short
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
        );
    }

    /**
     * Generates a collection of attachment fields from array
     *
     * @param array $data
<<<<<<< HEAD
     *
=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @return array
     */
    private function generateAttachmentFields(array $data)
    {
        $fields = array();
        foreach ($data as $key => $value) {
<<<<<<< HEAD
            $fields[] = $this->generateAttachmentField($key, $value);
=======
            $fields[] = $this->generateAttachmentField($key, $value, false);
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
        }

        return $fields;
    }
<<<<<<< HEAD

    /**
     * Get a copy of record with fields excluded according to $this->excludeFields
     *
     * @param array $record
     *
     * @return array
     */
    private function excludeFields(array $record)
    {
        foreach ($this->excludeFields as $field) {
            $keys = explode('.', $field);
            $node = &$record;
            $lastKey = end($keys);
            foreach ($keys as $key) {
                if (!isset($node[$key])) {
                    break;
                }
                if ($lastKey === $key) {
                    unset($node[$key]);
                    break;
                }
                $node = &$node[$key];
            }
        }

        return $record;
    }
=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
}
