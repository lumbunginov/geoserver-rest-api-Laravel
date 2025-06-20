<?php
/*
 *    GeoServer PHP Client
 *
 *    Copyright (c) 2018 Oneoff-tech UG, Germany, www.oneofftech.xyz
 *
 *    This program is Free Software: you can redistribute it and/or modify
 *    it under the terms of the GNU Affero General Public License as
 *    published by the Free Software Foundation, either version 3 of the
 *    License, or (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public
 *    License along with this program.  If not, see
 *    <http://www.gnu.org/licenses/>.
 */

namespace OneOffTech\GeoServer\Support;

use Psr\Http\Message\ResponseInterface;

final class ImageResponse
{
    private $response = null;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    public function mimeType()
    {
        $contentTypeHeader = $this->response->getHeader('Content-Type');
        return $contentTypeHeader[0] ?? 'application/octet-stream';
    }
    
    public function asString()
    {
        return (string)$this->response->getBody();
    }

    public static function from(ResponseInterface $response)
    {
        return new static($response);
    }
}
