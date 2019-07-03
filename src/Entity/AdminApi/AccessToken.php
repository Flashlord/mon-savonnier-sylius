<?php

declare(strict_types=1);

namespace App\Entity\AdminApi;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Sylius\Bundle\AdminApiBundle\Model\AccessToken as BaseAccessToken;

/**
 * @Entity
 * @Table(name="sylius_admin_api_access_token")
 */
class AccessToken extends BaseAccessToken
{
}
