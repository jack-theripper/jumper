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

use Arhitector\Transcoder\Codec;

/**
 * Interface FrameFormatInterface.
 *
 * @package Arhitector\Transcoder\Format
 */
interface FrameFormatInterface extends FormatInterface
{
	
	/**
	 * Get width value.
	 *
	 * @return int
	 */
	public function getWidth();
	
	/**
	 * Get height value.
	 *
	 * @return int
	 */
	public function getHeight();
	
	/**
	 * Get the video/frame codec.
	 *
	 * @return Codec
	 */
	public function getVideoCodec();
	
	/**
	 * Sets the video/frame codec, should be in the available ones, otherwise an exception is thrown.
	 *
	 * @param Codec $codec
	 *
	 * @return FrameFormatInterface
	 * @throws \InvalidArgumentException
	 */
	public function setVideoCodec(Codec $codec);
	
	/**
	 * Get available codecs.
	 *
	 * @return string[]
	 */
	public function getAvailableVideoCodecs();
	
}
