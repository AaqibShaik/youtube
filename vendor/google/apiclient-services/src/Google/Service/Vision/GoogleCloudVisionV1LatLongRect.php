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

class Google_Service_Vision_GoogleCloudVisionV1LatLongRect extends Google_Model
{
  protected $maxLatLngType = 'Google_Service_Vision_GoogleTypeLatLng';
  protected $maxLatLngDataType = '';
  protected $minLatLngType = 'Google_Service_Vision_GoogleTypeLatLng';
  protected $minLatLngDataType = '';

  /**
   * @param Google_Service_Vision_GoogleTypeLatLng
   */
  public function setMaxLatLng(Google_Service_Vision_GoogleTypeLatLng $maxLatLng)
  {
    $this->maxLatLng = $maxLatLng;
  }
  /**
   * @return Google_Service_Vision_GoogleTypeLatLng
   */
  public function getMaxLatLng()
  {
    return $this->maxLatLng;
  }
  /**
   * @param Google_Service_Vision_GoogleTypeLatLng
   */
  public function setMinLatLng(Google_Service_Vision_GoogleTypeLatLng $minLatLng)
  {
    $this->minLatLng = $minLatLng;
  }
  /**
   * @return Google_Service_Vision_GoogleTypeLatLng
   */
  public function getMinLatLng()
  {
    return $this->minLatLng;
  }
}
