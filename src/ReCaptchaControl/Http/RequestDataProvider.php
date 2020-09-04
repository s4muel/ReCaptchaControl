<?php

/**
 * This file is part of the ReCaptchaControl package
 *
 * @license  MIT
 * @author   Petr Kessler (https://kesspess.cz)
 * @link     https://github.com/uestla/ReCaptchaControl
 */

namespace ReCaptchaControl\Http;

use Nette\Http\IRequest;


class RequestDataProvider implements IRequestDataProvider
{

	/** @var IRequest */
	private $httpRequest;


	/** @param  IRequest $httpRequest */
	public function __construct(IRequest $httpRequest)
	{
		$this->httpRequest = $httpRequest;
	}


	/** @inheritdoc */
	public function getResponseValue()
	{
		return $this->httpRequest->getPost(self::RESPONSE_KEY, null);
	}


	/** @inheritdoc */
	public function getRemoteIP()
	{
		return $this->httpRequest->getRemoteAddress();
	}

}
