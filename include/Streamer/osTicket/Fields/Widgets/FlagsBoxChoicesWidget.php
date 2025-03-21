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

namespace Bitfinex\Data\Streamer\osTicket\Fields\Widgets;

/**
 * The flags box choices widget.
 *
 * @property mixed $value
 *   The current value of the field.
 * @property \ChoiceField $field
 *   The field this widget is attached to.
 */
class FlagsBoxChoicesWidget extends \BoxChoicesWidget {

  /**
   * {@inheritDoc}
   */
  public function render($options = []) {
    if (isset($this->{'value'}) === TRUE) {
      $this->{'value'} = $this->{'field'}->parse($this->{'value'});
    }
    else {
      $this->{'value'} = $this->{'field'}->parse($this->{'field'}->get('default'));

      if (isset($this->{'value'}) === FALSE) {
        $config = $this->{'field'}->getConfiguration();

        $has_default = \is_array($config) === TRUE
          && \array_key_exists('default', $config) === TRUE;

        if ($has_default) {
          $this->{'value'} = $this->{'field'}->parse($config['default']);
        }
      }
    }

    parent::render($options);
  }

}
