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
namespace Arhitector\Transcoder\Service;

use Arhitector\Transcoder\Traits\OptionsAwareTrait;

/**
 * Class ServiceFactory.
 *
 * @package Arhitector\Transcoder\Service
 */
class ServiceFactory implements ServiceFactoryInterface
{
	use OptionsAwareTrait;
	
	/**
	 * ServiceFactory constructor.
	 *
	 * @param array $options
	 */
	public function __construct(array $options = [])
	{
		$this->setOptions($options);
	}
	
	/**
	 * Get the decoder instance.
	 *
	 * @param array $options
	 *
	 * @return DecoderInterface
	 */
	public function getDecoderService(array $options = [])
	{
		/** @noinspection ExceptionsAnnotatingAndHandlingInspection */
		return new Decoder($options ?: $this->getOptions());
	}
	
	/**
	 * Get the encoder instance.
	 *
	 * @param array $options
	 *
	 * @return EncoderInterface
	 */
	public function getEncoderService(array $options = [])
	{
		$options = $options ?: $this->getOptions();
		
		if (isset($options[static::OPTION_USE_QUEUE]) && $options[static::OPTION_USE_QUEUE])
		{
			/** @noinspection ExceptionsAnnotatingAndHandlingInspection */
			return new EncoderQueue($this->options[static::OPTION_USE_QUEUE], $options);
		}
		
		/** @noinspection ExceptionsAnnotatingAndHandlingInspection */
		return new Encoder($options);
	}
	
}
