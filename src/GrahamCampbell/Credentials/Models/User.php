<?php

/**
 * This file is part of Laravel Credentials by Graham Campbell.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace GrahamCampbell\Credentials\Models;

use Carbon\Carbon;
use Cartalyst\Sentry\Users\Eloquent\User as SentryUser;
use GrahamCampbell\Core\Models\Interfaces\BaseModelInterface;
use GrahamCampbell\Core\Models\Common\BaseModelTrait;
use GrahamCampbell\Core\Models\Interfaces\NameModelInterface;
use GrahamCampbell\Core\Models\Common\NameModelTrait;

/**
 * This is the user model class.
 *
 * @package    Laravel-Credentials
 * @author     Graham Campbell
 * @copyright  Copyright 2013 Graham Campbell
 * @license    https://github.com/GrahamCampbell/Laravel-Credentials/blob/develop/LICENSE.md
 * @link       https://github.com/GrahamCampbell/Laravel-Credentials
 */
class User extends SentryUser implements BaseModelInterface, NameModelInterface
{
    use BaseModelTrait, NameModelTrait;

    /**
     * The table the users are stored in.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The model name.
     *
     * @var string
     */
    public static $name = 'user';

    /**
     * The columns to select when displaying an index.
     *
     * @var array
     */
    public static $index = array('id', 'email', 'first_name', 'last_name');

    /**
     * The max users per page when displaying a paginated index.
     *
     * @var int
     */
    public static $paginate = 20;

    /**
     * The columns to order by when displaying an index.
     *
     * @var string
     */
    public static $order = 'email';

    /**
     * The direction to order by when displaying an index.
     *
     * @var string
     */
    public static $sort = 'asc';

    /**
     * Get email.
     *
     * @param  array  $input
     * @return void
     */
    public function getEmail()
    {
        // TODO: Use the TraitEmailModel from the Core package
        return $this->email;
    }

    /**
     * Get activated.
     *
     * @return bool
     */
    public function getActivated()
    {
        // TODO: Use the TraitActivatedModel from the Core package
        return $this->activated;
    }

    /**
     * Get activated_at.
     *
     * @return \Carbon\Carbon
     */
    public function getActivatedAt()
    {
        // TODO: Use the TraitActivatedModel from the Core package
        $activated_at = $this->activated_at;

        if ($activated_at) {
            return new Carbon($activated_at);
        }

        if ($this->activated) {
            return $this->created_at;
        }

        return null;
    }
}