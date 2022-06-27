<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Datastream;

class VpcPeeringConfig extends \Google\Model
{
  /**
   * @var string
   */
  public $subnet;
  /**
   * @var string
   */
  public $vpc;

  /**
   * @param string
   */
  public function setSubnet($subnet)
  {
    $this->subnet = $subnet;
  }
  /**
   * @return string
   */
  public function getSubnet()
  {
    return $this->subnet;
  }
  /**
   * @param string
   */
  public function setVpc($vpc)
  {
    $this->vpc = $vpc;
  }
  /**
   * @return string
   */
  public function getVpc()
  {
    return $this->vpc;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VpcPeeringConfig::class, 'Google_Service_Datastream_VpcPeeringConfig');
