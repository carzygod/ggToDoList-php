<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection show
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection mid
     * @property Grid\Column|Collection uid
     * @property Grid\Column|Collection model_id
     * @property Grid\Column|Collection model_type
     * @property Grid\Column|Collection formId
     * @property Grid\Column|Collection isShowed
     * @property Grid\Column|Collection likes
     * @property Grid\Column|Collection msg
     * @property Grid\Column|Collection stars
     * @property Grid\Column|Collection toId
     * @property Grid\Column|Collection mpUrl
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection display_name
     * @property Grid\Column|Collection group_name
     * @property Grid\Column|Collection guard_name
     * @property Grid\Column|Collection abilities
     * @property Grid\Column|Collection last_used_at
     * @property Grid\Column|Collection tokenable_id
     * @property Grid\Column|Collection tokenable_type
     * @property Grid\Column|Collection action
     * @property Grid\Column|Collection batch_id
     * @property Grid\Column|Collection content
     * @property Grid\Column|Collection family_hash
     * @property Grid\Column|Collection sequence
     * @property Grid\Column|Collection should_display_on_index
     * @property Grid\Column|Collection entry_uuid
     * @property Grid\Column|Collection tag
     * @property Grid\Column|Collection fid
     * @property Grid\Column|Collection uname
     * @property Grid\Column|Collection email_verified_at
     * @property Grid\Column|Collection level
     * @property Grid\Column|Collection phone
     * @property Grid\Column|Collection phone_verified_at
     * @property Grid\Column|Collection status
     *
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection show(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection mid(string $label = null)
     * @method Grid\Column|Collection uid(string $label = null)
     * @method Grid\Column|Collection model_id(string $label = null)
     * @method Grid\Column|Collection model_type(string $label = null)
     * @method Grid\Column|Collection formId(string $label = null)
     * @method Grid\Column|Collection isShowed(string $label = null)
     * @method Grid\Column|Collection likes(string $label = null)
     * @method Grid\Column|Collection msg(string $label = null)
     * @method Grid\Column|Collection stars(string $label = null)
     * @method Grid\Column|Collection toId(string $label = null)
     * @method Grid\Column|Collection mpUrl(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection display_name(string $label = null)
     * @method Grid\Column|Collection group_name(string $label = null)
     * @method Grid\Column|Collection guard_name(string $label = null)
     * @method Grid\Column|Collection abilities(string $label = null)
     * @method Grid\Column|Collection last_used_at(string $label = null)
     * @method Grid\Column|Collection tokenable_id(string $label = null)
     * @method Grid\Column|Collection tokenable_type(string $label = null)
     * @method Grid\Column|Collection action(string $label = null)
     * @method Grid\Column|Collection batch_id(string $label = null)
     * @method Grid\Column|Collection content(string $label = null)
     * @method Grid\Column|Collection family_hash(string $label = null)
     * @method Grid\Column|Collection sequence(string $label = null)
     * @method Grid\Column|Collection should_display_on_index(string $label = null)
     * @method Grid\Column|Collection entry_uuid(string $label = null)
     * @method Grid\Column|Collection tag(string $label = null)
     * @method Grid\Column|Collection fid(string $label = null)
     * @method Grid\Column|Collection uname(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     * @method Grid\Column|Collection level(string $label = null)
     * @method Grid\Column|Collection phone(string $label = null)
     * @method Grid\Column|Collection phone_verified_at(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection id
     * @property Show\Field|Collection name
     * @property Show\Field|Collection type
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection version
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection order
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection show
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection password
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection username
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection mid
     * @property Show\Field|Collection uid
     * @property Show\Field|Collection model_id
     * @property Show\Field|Collection model_type
     * @property Show\Field|Collection formId
     * @property Show\Field|Collection isShowed
     * @property Show\Field|Collection likes
     * @property Show\Field|Collection msg
     * @property Show\Field|Collection stars
     * @property Show\Field|Collection toId
     * @property Show\Field|Collection mpUrl
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection display_name
     * @property Show\Field|Collection group_name
     * @property Show\Field|Collection guard_name
     * @property Show\Field|Collection abilities
     * @property Show\Field|Collection last_used_at
     * @property Show\Field|Collection tokenable_id
     * @property Show\Field|Collection tokenable_type
     * @property Show\Field|Collection action
     * @property Show\Field|Collection batch_id
     * @property Show\Field|Collection content
     * @property Show\Field|Collection family_hash
     * @property Show\Field|Collection sequence
     * @property Show\Field|Collection should_display_on_index
     * @property Show\Field|Collection entry_uuid
     * @property Show\Field|Collection tag
     * @property Show\Field|Collection fid
     * @property Show\Field|Collection uname
     * @property Show\Field|Collection email_verified_at
     * @property Show\Field|Collection level
     * @property Show\Field|Collection phone
     * @property Show\Field|Collection phone_verified_at
     * @property Show\Field|Collection status
     *
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection show(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection mid(string $label = null)
     * @method Show\Field|Collection uid(string $label = null)
     * @method Show\Field|Collection model_id(string $label = null)
     * @method Show\Field|Collection model_type(string $label = null)
     * @method Show\Field|Collection formId(string $label = null)
     * @method Show\Field|Collection isShowed(string $label = null)
     * @method Show\Field|Collection likes(string $label = null)
     * @method Show\Field|Collection msg(string $label = null)
     * @method Show\Field|Collection stars(string $label = null)
     * @method Show\Field|Collection toId(string $label = null)
     * @method Show\Field|Collection mpUrl(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection display_name(string $label = null)
     * @method Show\Field|Collection group_name(string $label = null)
     * @method Show\Field|Collection guard_name(string $label = null)
     * @method Show\Field|Collection abilities(string $label = null)
     * @method Show\Field|Collection last_used_at(string $label = null)
     * @method Show\Field|Collection tokenable_id(string $label = null)
     * @method Show\Field|Collection tokenable_type(string $label = null)
     * @method Show\Field|Collection action(string $label = null)
     * @method Show\Field|Collection batch_id(string $label = null)
     * @method Show\Field|Collection content(string $label = null)
     * @method Show\Field|Collection family_hash(string $label = null)
     * @method Show\Field|Collection sequence(string $label = null)
     * @method Show\Field|Collection should_display_on_index(string $label = null)
     * @method Show\Field|Collection entry_uuid(string $label = null)
     * @method Show\Field|Collection tag(string $label = null)
     * @method Show\Field|Collection fid(string $label = null)
     * @method Show\Field|Collection uname(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     * @method Show\Field|Collection level(string $label = null)
     * @method Show\Field|Collection phone(string $label = null)
     * @method Show\Field|Collection phone_verified_at(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
