<?php

/**
 * This file is part of bfx-ost-streamer.
 *
 * Copyright (C) 2021-2025 Davide Scola <davide@bitfinex.com>,
 *                         Nicoletta Maia <nicoletta@bitfinex.com>.
 *
 * Licensed under the Apache License,  Version 2.0 (the "License"); you may
 * not use this file except in  compliance with the License. You may obtain
 * a copy of the License at
 *
 *       http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless  required by  applicable law  or agreed  to in  writing, software
 * distributed  under the  License  is  distributed on  an  "AS IS"  BASIS,
 * WITHOUT  WARRANTIES  OR  CONDITIONS  OF  ANY  KIND,  either  express  or
 * implied. See the License for the specific language governing permissions
 * and limitations under the License.
 */

namespace Bitfinex\Data\Streamer\osTicket\Fields\Validators;

use Bitfinex\Data\Validator\Strings\HelpdeskCodeValidator;

/**
 * The helpdesk code field validator.
 */
class HelpdeskCodeFieldValidator extends AbstractFieldValidator {

  /**
   * {@inheritDoc}
   */
  public static function length() : int {
    return \intval(HelpdeskCodeValidator::getMaximumLength());
  }

  /**
   * {@inheritDoc}
   */
  protected static function error() : string {
    return __('Not a valid helpdesk code');
  }

  /**
   * {@inheritDoc}
   */
  protected static function isNotValid($value) : bool {
    return HelpdeskCodeValidator::isNotValid($value);
  }

}
