<?php
namespace Ascora\AscoraFormatter;

use Crossjoin\Browscap\Formatter\AbstractFormatter as AbstractFormatter;

/**
 * Ascora formatter class
 *
 * This formatter modifies the basic data, so that you get the same result
 * with the general Browscap implementation
 *
 *
 * The MIT License (MIT)
 *
 * Copyright (c) 2015 Tobias Hinz <hinz@ascora.de>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @package ascora\AscoraFormatter
 * @author Tobias Hinz <hinz@ascora.de>
 * @copyright Copyright (c) 2015 Tobias Hinz <hinz@ascora.de>
 * @version 1.0.0
 * @license http://www.opensource.org/licenses/MIT MIT License
 * @link https://github.com/tobiashinz/AscoraFormatter
 */
class AscoraFormatter
extends AbstractFormatter
{
    public function __construct()
    {
        $this->settings = new \stdClass();
    }

    /**
     * Sets the data (done by the parser)
     *
     * @param array $settings
     */
    public function setData(array $settings)
    {
        $this->settings = new \stdClass();
        foreach ($settings as $key => $value) {
            switch ($value) {
                case 'false':
                    $this->settings->$key = false;
                    break;
                case 'true':
                    $this->settings->$key = true;
                    break;
                default:
                    $this->settings->$key = $value;
                    break;
            }
            
        }
    }

    /**
     * Gets the data (in the preferred format)
     *
     * @return \stdClass
     */
    public function getData()
    {
        return $this->settings;
    }
}