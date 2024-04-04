<?php

/**
 * This file is part of bfx-ost-streamer.
 *
 * Copyright (C) 2021-2024 Davide Scola <davide@bitfinex.com>,
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

namespace Bitfinex\Data\Validator;

/**
 * The validator interface.
 */
interface ValidatorInterface {

  /**
   * Checks whether a value respects a set of constraints.
   *
   * @param mixed $value
   *   The value to be inspected.
   *
   * @return bool
   *   TRUE if value respects all constraints, FALSE otherwise.
   */
  public static function isValid($value) : bool;

  /**
   * Checks whether a value violates at least one constraint of a set.
   *
   * @param mixed $value
   *   The value to be inspected.
   *
   * @return bool
   *   TRUE if value violates a constraint, FALSE otherwise.
   */
  public static function isNotValid($value) : bool;

}
