<?php

namespace App\Enums;

enum PermissionEnum : string
{
    case VIEW_LISTINGS = 'view_listings';
    case CREATE_LISTING = 'create_listing';
    case EDIT_OWN_LISTING = 'edit_own_listing';
    case DELETE_OWN_LISTING = 'delete_own_listing';
    case APPROVE_LISTING = 'approve_listing';
    case DELETE_ANY_LISTING = 'delete_any_listing';

    //transactions
    case BID = 'bid';
    case PURCHASE = 'purchase';
    case VIEW_OWN_TRANSACTIONS = 'view_own_transactions';
    case VIEW_ALL_TRANSACTIONS = 'view_all_transactions';

    //Users
    case MANAGE_USERS = 'manage_users';
    case EDIT_OWN_PROFILE = 'edit_own_profile';

    //system
    case CONFIGURE_SETTINGS = 'configure_settings';
    public function permissions(): array
    {

        return match ($this) {
            self::ADMIN => [
                PermissionEnum::VIEW_LISTINGS,
                PermissionEnum::CREATE_LISTING,
                PermissionEnum::EDIT_OWN_LISTING,
                PermissionEnum::DELETE_OWN_LISTING,
                PermissionEnum::APPROVE_LISTING,
                PermissionEnum::DELETE_ANY_LISTING,
                PermissionEnum::BID,
                PermissionEnum::PURCHASE,
                PermissionEnum::VIEW_OWN_TRANSACTIONS,
                PermissionEnum::VIEW_ALL_TRANSACTIONS,
                PermissionEnum::MANAGE_USERS,
                PermissionEnum::EDIT_OWN_PROFILE,
                PermissionEnum::CONFIGURE_SETTINGS,
            ],
            self::EDITOR => [
                PermissionEnum::VIEW_LISTINGS,
                PermissionEnum::CREATE_LISTING,
                PermissionEnum::EDIT_OWN_LISTING,
                PermissionEnum::DELETE_OWN_LISTING,
                PermissionEnum::BID,
                PermissionEnum::PURCHASE,
                PermissionEnum::VIEW_OWN_TRANSACTIONS,
                PermissionEnum::EDIT_OWN_PROFILE,
            ],
            self::USER => [
                PermissionEnum::VIEW_LISTINGS,
                PermissionEnum::BID,
                PermissionEnum::PURCHASE,
                PermissionEnum::VIEW_OWN_TRANSACTIONS,
                PermissionEnum::EDIT_OWN_PROFILE,
            ],
        };
    }

}


