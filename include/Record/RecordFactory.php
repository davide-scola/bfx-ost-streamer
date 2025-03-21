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

namespace Bitfinex\Data\Record;

use Bitfinex\Data\AbstractFactory;

/**
 * The record factory.
 */
class RecordFactory extends AbstractFactory {

  /**
   * {@inheritDoc}
   *
   * @return RecordInterface
   *   A new instance of the record.
   */
  public function create(string $format, ...$arguments) : RecordInterface {
    return parent::create($format, ...$arguments);
  }

  /**
   * {@inheritDoc}
   */
  protected function options() : array {
    return [
      KinesisRecord::getFormatName() => [
        static::DESCRIPTION_KEY => 'Amazon Kinesis',
        static::INITIALIZER_KEY => function (...$arguments) {
          return new KinesisRecord(...$arguments);
        },
      ],
    ];
  }

}
