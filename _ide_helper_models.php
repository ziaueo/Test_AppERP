<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Article
 *
 * @property int $id
 * @property string $title
 * @property string|null $content
 * @property string|null $slug
 * @property string|null $image_url
 * @property bool|null $is_news
 * @property string|null $status
 * @property int|null $category_id
 * @property int|null $creator_id
 * @property int|null $updater_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\ArticleCategory|null $category
 * @property-read \App\User|null $creator
 * @property-read \App\User|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newQuery()
 * @method static \Illuminate\Database\Query\Builder|Article onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereIsNews($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdaterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article withDetail()
 * @method static \Illuminate\Database\Eloquent\Builder|Article withList()
 * @method static \Illuminate\Database\Query\Builder|Article withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Article withoutTrashed()
 */
	class Article extends \Eloquent {}
}

namespace App{
/**
 * App\ArticleCategory
 *
 * @property int $id
 * @property string $name
 * @property int|null $creator_id
 * @property int|null $updater_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleCategory whereUpdaterId($value)
 */
	class ArticleCategory extends \Eloquent {}
}

namespace App{
/**
 * App\ArticleComment
 *
 * @property int $id
 * @property int|null $articles_id
 * @property int|null $comment_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Article $article
 * @property-read \App\Comment|null $comment
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleComment newQuery()
 * @method static \Illuminate\Database\Query\Builder|ArticleComment onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleComment query()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleComment whereArticlesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleComment whereCommentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleComment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleComment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ArticleComment withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ArticleComment withoutTrashed()
 */
	class ArticleComment extends \Eloquent {}
}

namespace App{
/**
 * App\Category
 *
 * @property int $id
 * @property string $name
 * @property string|null $image_url
 * @property int|null $creator_id
 * @property int|null $updater_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Article[] $articles
 * @property-read int|null $articles_count
 * @property-read \App\User|null $creator
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Event[] $events
 * @property-read int|null $events_count
 * @property-read \App\User|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Query\Builder|Category onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdaterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category withDetail()
 * @method static \Illuminate\Database\Query\Builder|Category withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Category withoutTrashed()
 */
	class Category extends \Eloquent {}
}

namespace App{
/**
 * App\Comment
 *
 * @property int $id
 * @property string|null $content
 * @property bool|null $is_reply
 * @property int|null $creator_id
 * @property int|null $updater_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Comment[] $commentReplies
 * @property-read int|null $comment_replies_count
 * @property-read \App\User|null $creator
 * @property-read mixed $is_mine
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Post[] $post
 * @property-read int|null $post_count
 * @property-read \App\CommentReply $replies
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newQuery()
 * @method static \Illuminate\Database\Query\Builder|Comment onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereIsReply($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereUpdaterId($value)
 * @method static \Illuminate\Database\Query\Builder|Comment withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Comment withoutTrashed()
 */
	class Comment extends \Eloquent {}
}

namespace App{
/**
 * App\CommentPost
 *
 * @property int $id
 * @property int|null $post_id
 * @property int|null $comment_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Comment|null $comment
 * @property-read \App\Post|null $post
 * @method static \Illuminate\Database\Eloquent\Builder|CommentPost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommentPost newQuery()
 * @method static \Illuminate\Database\Query\Builder|CommentPost onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CommentPost query()
 * @method static \Illuminate\Database\Eloquent\Builder|CommentPost whereCommentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommentPost whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommentPost whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommentPost whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommentPost wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommentPost whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|CommentPost withTrashed()
 * @method static \Illuminate\Database\Query\Builder|CommentPost withoutTrashed()
 */
	class CommentPost extends \Eloquent {}
}

namespace App{
/**
 * App\CommentReply
 *
 * @property int $id
 * @property int|null $parent_id
 * @property int|null $reply_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Comment|null $parent
 * @property-read \App\Comment|null $reply
 * @method static \Illuminate\Database\Eloquent\Builder|CommentReply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommentReply newQuery()
 * @method static \Illuminate\Database\Query\Builder|CommentReply onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CommentReply query()
 * @method static \Illuminate\Database\Eloquent\Builder|CommentReply whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommentReply whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommentReply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommentReply whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommentReply whereReplyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommentReply whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|CommentReply withTrashed()
 * @method static \Illuminate\Database\Query\Builder|CommentReply withoutTrashed()
 */
	class CommentReply extends \Eloquent {}
}

namespace App{
/**
 * App\Event
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string|null $start
 * @property string|null $end
 * @property string|null $image_url
 * @property string|null $lat_location
 * @property string|null $lng_location
 * @property string|null $location_description
 * @property string|null $qr_code
 * @property string|null $status
 * @property int|null $category_id
 * @property int|null $creator_id
 * @property int|null $updater_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $is_event
 * @property string|null $map_design
 * @property string|null $brochure_file
 * @property string|null $youtube_link
 * @property-read \App\User|null $creator
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\EventAttendance[] $eventAttendances
 * @property-read int|null $event_attendances_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\EventExhibitor[] $exhibitors
 * @property-read int|null $exhibitors_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Sponsor[] $sponsors
 * @property-read int|null $sponsors_count
 * @property-read \App\User|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder|Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event newQuery()
 * @method static \Illuminate\Database\Query\Builder|Event onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Event query()
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereBrochureFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereIsEvent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereLatLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereLngLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereLocationDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereMapDesign($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereQrCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUpdaterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereYoutubeLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event withDetail()
 * @method static \Illuminate\Database\Query\Builder|Event withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Event withoutTrashed()
 */
	class Event extends \Eloquent {}
}

namespace App{
/**
 * App\EventAttendance
 *
 * @property int $id
 * @property int $visitor_id
 * @property int $event_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Event $event
 * @property-read \App\User $visitor
 * @method static \Illuminate\Database\Eloquent\Builder|EventAttendance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventAttendance newQuery()
 * @method static \Illuminate\Database\Query\Builder|EventAttendance onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|EventAttendance query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventAttendance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventAttendance whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventAttendance whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventAttendance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventAttendance whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventAttendance whereVisitorId($value)
 * @method static \Illuminate\Database\Query\Builder|EventAttendance withTrashed()
 * @method static \Illuminate\Database\Query\Builder|EventAttendance withoutTrashed()
 */
	class EventAttendance extends \Eloquent {}
}

namespace App{
/**
 * App\EventExhibitor
 *
 * @property int $id
 * @property int $exhibitor_id
 * @property int $event_id
 * @property string|null $number
 * @property string|null $description
 * @property string|null $qr_code
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Event $event
 * @property-read \App\Exhibitor $exhibitor
 * @method static \Illuminate\Database\Eloquent\Builder|EventExhibitor getList()
 * @method static \Illuminate\Database\Eloquent\Builder|EventExhibitor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventExhibitor newQuery()
 * @method static \Illuminate\Database\Query\Builder|EventExhibitor onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|EventExhibitor query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventExhibitor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventExhibitor whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventExhibitor whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventExhibitor whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventExhibitor whereExhibitorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventExhibitor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventExhibitor whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventExhibitor whereQrCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventExhibitor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|EventExhibitor withTrashed()
 * @method static \Illuminate\Database\Query\Builder|EventExhibitor withoutTrashed()
 */
	class EventExhibitor extends \Eloquent {}
}

namespace App{
/**
 * App\EventFloor
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $number
 * @property string|null $qr_code
 * @property string|null $image_url
 * @property int $event_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|EventFloor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventFloor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventFloor query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventFloor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventFloor whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventFloor whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventFloor whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventFloor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventFloor whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventFloor whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventFloor whereQrCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventFloor whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventFloor whereUpdatedAt($value)
 */
	class EventFloor extends \Eloquent {}
}

namespace App{
/**
 * App\EventSponsor
 *
 * @property int $id
 * @property int $event_id
 * @property int $sponsor_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int $number
 * @method static \Illuminate\Database\Eloquent\Builder|EventSponsor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventSponsor newQuery()
 * @method static \Illuminate\Database\Query\Builder|EventSponsor onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|EventSponsor query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventSponsor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventSponsor whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventSponsor whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventSponsor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventSponsor whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventSponsor whereSponsorId($value)
 * @method static \Illuminate\Database\Query\Builder|EventSponsor withTrashed()
 * @method static \Illuminate\Database\Query\Builder|EventSponsor withoutTrashed()
 */
	class EventSponsor extends \Eloquent {}
}

namespace App{
/**
 * App\Exhibitor
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $telp
 * @property string|null $website
 * @property string|null $description
 * @property string|null $address
 * @property string|null $qr_code
 * @property string|null $owner
 * @property string|null $contact_person
 * @property int|null $employee_male
 * @property int|null $employee_female
 * @property string|null $image_url
 * @property bool|null $status
 * @property int|null $approver_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $profile_file
 * @property string|null $catalog_file
 * @property-read \App\User|null $approver
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\EventExhibitor[] $eventExhibitors
 * @property-read int|null $event_exhibitors_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @property-read int|null $products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Testimonial[] $testimonials
 * @property-read int|null $testimonials_count
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor exclude($value = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor newQuery()
 * @method static \Illuminate\Database\Query\Builder|Exhibitor onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereApproverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereCatalogFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereContactPerson($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereEmployeeFemale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereEmployeeMale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereOwner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereProfileFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereQrCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereTelp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exhibitor withDetail()
 * @method static \Illuminate\Database\Query\Builder|Exhibitor withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Exhibitor withoutTrashed()
 */
	class Exhibitor extends \Eloquent {}
}

namespace App{
/**
 * App\Helpdesk
 *
 * @property int $id
 * @property string $title
 * @property int $category_id
 * @property string $content
 * @property int $viewed
 * @property bool $status
 * @property int $creator_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property int|null $updater_id
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $slug
 * @property string|null $image_url
 * @property-read \App\HelpdeskCategory $category
 * @property-read \App\User $creator
 * @property-read \App\User|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder|Helpdesk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Helpdesk newQuery()
 * @method static \Illuminate\Database\Query\Builder|Helpdesk onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Helpdesk query()
 * @method static \Illuminate\Database\Eloquent\Builder|Helpdesk whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Helpdesk whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Helpdesk whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Helpdesk whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Helpdesk whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Helpdesk whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Helpdesk whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Helpdesk whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Helpdesk whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Helpdesk whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Helpdesk whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Helpdesk whereUpdaterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Helpdesk whereViewed($value)
 * @method static \Illuminate\Database\Query\Builder|Helpdesk withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Helpdesk withoutTrashed()
 */
	class Helpdesk extends \Eloquent {}
}

namespace App{
/**
 * App\HelpdeskCategory
 *
 * @property int $id
 * @property string $title
 * @property int $creator_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property int|null $updater_id
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\User $creator
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Helpdesk[] $helpdesks
 * @property-read int|null $helpdesks_count
 * @property-read \App\User|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder|HelpdeskCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HelpdeskCategory newQuery()
 * @method static \Illuminate\Database\Query\Builder|HelpdeskCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|HelpdeskCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|HelpdeskCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HelpdeskCategory whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HelpdeskCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HelpdeskCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HelpdeskCategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HelpdeskCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HelpdeskCategory whereUpdaterId($value)
 * @method static \Illuminate\Database\Query\Builder|HelpdeskCategory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|HelpdeskCategory withoutTrashed()
 */
	class HelpdeskCategory extends \Eloquent {}
}

namespace App{
/**
 * App\Permission
 *
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 */
	class Permission extends \Eloquent {}
}

namespace App{
/**
 * App\Post
 *
 * @property int $id
 * @property string $title
 * @property string|null $content
 * @property int|null $viewed
 * @property string|null $slug
 * @property string|null $image_url
 * @property int|null $creator_id
 * @property int|null $updater_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \App\User|null $creator
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Query\Builder|Post onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdaterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereViewed($value)
 * @method static \Illuminate\Database\Query\Builder|Post withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Post withoutTrashed()
 */
	class Post extends \Eloquent {}
}

namespace App{
/**
 * App\Product
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string|null $price
 * @property int|null $stock
 * @property string|null $status
 * @property string|null $link_marketplace
 * @property string|null $image_url
 * @property int $exhibitor_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $viewed
 * @property-read \App\Exhibitor $exhibitor
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Query\Builder|Product onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereExhibitorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereLinkMarketplace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereViewed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product withDetail()
 * @method static \Illuminate\Database\Query\Builder|Product withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Product withoutTrashed()
 */
	class Product extends \Eloquent {}
}

namespace App{
/**
 * App\ProductWishlist
 *
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Product $product
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWishlist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWishlist newQuery()
 * @method static \Illuminate\Database\Query\Builder|ProductWishlist onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWishlist query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWishlist whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWishlist whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWishlist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWishlist whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWishlist whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWishlist whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWishlist withDetail()
 * @method static \Illuminate\Database\Query\Builder|ProductWishlist withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ProductWishlist withoutTrashed()
 */
	class ProductWishlist extends \Eloquent {}
}

namespace App{
/**
 * App\Role
 *
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App{
/**
 * App\Setting
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 */
	class Setting extends \Eloquent {}
}

namespace App{
/**
 * App\Sponsor
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $contact_person
 * @property string|null $website
 * @property string|null $telp
 * @property int|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property int|null $creator_id
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $updater_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $image_url
 * @property-read \App\User|null $creator
 * @property-read \App\User|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor newQuery()
 * @method static \Illuminate\Database\Query\Builder|Sponsor onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereContactPerson($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereTelp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereUpdaterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsor whereWebsite($value)
 * @method static \Illuminate\Database\Query\Builder|Sponsor withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Sponsor withoutTrashed()
 */
	class Sponsor extends \Eloquent {}
}

namespace App{
/**
 * App\Testimonial
 *
 * @property int $id
 * @property int $user_id
 * @property int $exhibitor_id
 * @property string $content
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int $rating
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Exhibitor $exhibitor
 * @property-read \App\User $testimonial
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newQuery()
 * @method static \Illuminate\Database\Query\Builder|Testimonial onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial query()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereExhibitorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Testimonial withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Testimonial withoutTrashed()
 */
	class Testimonial extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $gender
 * @property string|null $telp_num
 * @property string|null $ktp_num
 * @property string|null $image_url
 * @property string|null $bio
 * @property string|null $qr_code
 * @property string $type
 * @property string|null $actual_login_at
 * @property string|null $actual_login_ip
 * @property \Illuminate\Support\Carbon|null $last_login_at
 * @property string|null $last_login_ip
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $postcode
 * @property string|null $province
 * @property string|null $country
 * @property string|null $date_of_born
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\EventAttendance[] $eventAttendances
 * @property-read int|null $event_attendances_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Event[] $events
 * @property-read int|null $events_count
 * @property-read \App\Exhibitor|null $exhibitor
 * @property-read mixed $full_name
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ProductWishlist[] $productWishlists
 * @property-read int|null $product_wishlists_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $role
 * @property-read int|null $role_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereActualLoginAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereActualLoginIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDateOfBorn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereKtpNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastLoginAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastLoginIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereQrCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTelpNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

