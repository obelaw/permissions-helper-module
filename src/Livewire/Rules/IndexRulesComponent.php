<?php

namespace Obelaw\Permissions\Livewire\Rules;

use Obelaw\Framework\ACL\Attributes\PermissionAttribute;
use Obelaw\Framework\Base\GridBase;

#[PermissionAttribute('permissions_rules_index')]
class IndexRulesComponent extends GridBase
{
    public $gridId = 'obelaw_helper_permissions_rules_index';

    protected $pretitle = 'Permissions';
    protected $title = 'Rules Listing';
}
