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

namespace Bitfinex\Data;

/**
 * The action interface.
 */
interface ActionInterface {

  /**
   * Get the action name.
   *
   * @return string
   *   The action name.
   */
  public static function getName() : string;

  /**
   * Trigger the action.
   *
   * @param mixed $data
   *   The variable that will be passed to listeners by reference.
   * @param mixed $context
   *   An additional variable that is passed by reference.
   *
   * @return void
   */
  public function trigger(&$data, &$context = NULL);

}
