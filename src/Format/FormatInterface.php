<?php
/**
 * This file is part of the arhitector/transcoder-ffmpeg library.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    Dmitry Arhitector <dmitry.arhitector@yandex.ru>
 *
 * @license   http://opensource.org/licenses/MIT MIT
 * @copyright Copyright (c) 2017-2019 Dmitry Arhitector <dmitry.arhitector@yandex.ru>
 */
namespace Arhitector\Transcoder\Format;

use Arhitector\Transcoder\Event\EmitterInterface;
use Arhitector\Transcoder\Preset\PresetInterface;
use Arhitector\Transcoder\TimeInterval;

/**
 * Interface FormatInterface.
 *
 * @package Arhitector\Transcoder\Format
 */
interface FormatInterface extends \ArrayAccess, EmitterInterface
{
	
	/**
	 * Returns a new format instance.
	 *
	 * @param array $options
	 *
	 * @return static
	 */
	public static function fromArray(array $options);
	
	/**
	 * Get the duration value.
	 *
	 * @return TimeInterval
	 */
	public function getDuration();
	
	/**
	 * Gets the metadata.
	 *
	 * @return array
	 */
	public function getMetadata();
	
	/**
	 * Returns the number of passes.
	 *
	 * @return int
	 */
	public function getPasses();
	
	/**
	 * Get the format extensions.
	 *
	 * @return array
	 */
	public function getExtensions();
	
	/**
	 * Clone format instance with a new parameters from preset.
	 *
	 * @param PresetInterface $preset
	 *
	 * @return FormatInterface
	 */
	public function withPreset(PresetInterface $preset);
	
	/**
	 * Gets the extra params.
	 *
	 * @return array
	 */
	public function getOptions();
	
}
