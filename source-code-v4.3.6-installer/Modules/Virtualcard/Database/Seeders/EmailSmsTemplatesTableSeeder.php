<?php

namespace Modules\Virtualcard\Database\Seeders;

use App\Models\EmailTemplate;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class EmailSmsTemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::unguard();

        EmailTemplate::insert([

            // Notify Admin on New Virtual Card Application Email
            [
                'name' => 'Notify Admin on New Virtual Card Application',
                'alias' => 'notify-admin-on-new-virtual-card-application',
                'subject' => 'New Virtual Card Application Notification',
                'body' => 'Hi <b>{admin}</b>,
                <br><br><b>{user}</b> has created a virtual card application.
                <br><br><b><u><i>Here’s a brief overview of the Application:</i></u></b>
                <br><br><b><u>Name:</u></b> {user}
                <br><br><b><u>Virtual Card Holder Type:</u></b> {type}
                <br><br>Regards,
                <br><b>{soft_name}</b>',
                'language_id' => getLanguageId('en'),
                'lang' => 'en',
                'type' => 'email',
                'group' => 'Virtual Card',
                'status' => 'Active',
            ],
            ['name' => 'Notify Admin on New Virtual Card Application', 'alias' => 'notify-admin-on-new-virtual-card-application', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ar'), 'lang' => 'ar', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on New Virtual Card Application', 'alias' => 'notify-admin-on-new-virtual-card-application', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('fr'), 'lang' => 'fr', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on New Virtual Card Application', 'alias' => 'notify-admin-on-new-virtual-card-application', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('pt'), 'lang' => 'pt', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on New Virtual Card Application', 'alias' => 'notify-admin-on-new-virtual-card-application', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ru'), 'lang' => 'ru', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on New Virtual Card Application', 'alias' => 'notify-admin-on-new-virtual-card-application', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('es'), 'lang' => 'es', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on New Virtual Card Application', 'alias' => 'notify-admin-on-new-virtual-card-application', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('tr'), 'lang' => 'tr', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on New Virtual Card Application', 'alias' => 'notify-admin-on-new-virtual-card-application', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ch'), 'lang' => 'ch', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],

            //  Notify User on Virtual Card Application Approve/Reject Email
            [
                'name' => 'Notify User on Virtual Card Application Approve/Reject',
                'alias' => 'notify-user-on-virtual-card-application-approve-reject',
                'subject' => 'Virtual Card {Approve/Reject} Notification',
                'body' => 'Hi <b>{user}</b>,
                <br><br>Your requested virtual card application has been <b>{status}</b>.
                 <br><br><b><u><i>Here’s a brief overview of the Application:</i></u></b>
                <br><br><b><u>Name:</u></b> {user}
                <br><br><b><u>Virtual Card Holder Type:</u></b> {type}
                <br><br>If you have any questions, please feel free to reply to this email.
                <br><br>Regards,
                <br><b>{soft_name}</b>',
                'language_id' => getLanguageId('en'),
                'lang' => 'en',
                'type' => 'email',
                'group' => 'Virtual Card',
                'status' => 'Active',
            ],
            ['name' => 'Notify User on Virtual Card Application Approve/Reject', 'alias' => 'notify-user-on-virtual-card-application-approve-reject', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ar'), 'lang' => 'ar', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Application Approve/Reject', 'alias' => 'notify-user-on-virtual-card-application-approve-reject', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('fr'), 'lang' => 'fr', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Application Approve/Reject', 'alias' => 'notify-user-on-virtual-card-application-approve-reject', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('pt'), 'lang' => 'pt', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Application Approve/Reject', 'alias' => 'notify-user-on-virtual-card-application-approve-reject', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ru'), 'lang' => 'ru', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Application Approve/Reject', 'alias' => 'notify-user-on-virtual-card-application-approve-reject', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('es'), 'lang' => 'es', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Application Approve/Reject', 'alias' => 'notify-user-on-virtual-card-application-approve-reject', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('tr'), 'lang' => 'tr', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Application Approve/Reject', 'alias' => 'notify-user-on-virtual-card-application-approve-reject', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ch'), 'lang' => 'ch', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],

            // Notify Admin on New Virtual Card Request Email
            [
                'name' => 'Notify Admin on New Virtual Card Request',
                'alias' => 'notify-admin-on-new-virtual-card-request',
                'subject' => 'New Virtual Card Request Notification',
                'body' => 'Hi <b>{admin}</b>,
                <br><br><b>{user}</b> has applied for a virtual card.
                <br><br><b><u><i>Here’s a brief overview of the Application:</i></u></b>
                <br><br><b><u>Name:</u></b> {user}
                <br><br><b><u>Virtual Card Holder Type:</u></b> {type}
                <br><br><b><u>Preferred Currency:</u></b> {currency}
                <br><br>Regards,
                <br><b>{soft_name}</b>',
                'language_id' => getLanguageId('en'),
                'lang' => 'en',
                'type' => 'email',
                'group' => 'Virtual Card',
                'status' => 'Active',
            ],
            ['name' => 'Notify Admin on New Virtual Card Request', 'alias' => 'notify-admin-on-new-virtual-card-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ar'), 'lang' => 'ar', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on New Virtual Card Request', 'alias' => 'notify-admin-on-new-virtual-card-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('fr'), 'lang' => 'fr', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on New Virtual Card Request', 'alias' => 'notify-admin-on-new-virtual-card-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('pt'), 'lang' => 'pt', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on New Virtual Card Request', 'alias' => 'notify-admin-on-new-virtual-card-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ru'), 'lang' => 'ru', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on New Virtual Card Request', 'alias' => 'notify-admin-on-new-virtual-card-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('es'), 'lang' => 'es', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on New Virtual Card Request', 'alias' => 'notify-admin-on-new-virtual-card-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('tr'), 'lang' => 'tr', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on New Virtual Card Request', 'alias' => 'notify-admin-on-new-virtual-card-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ch'), 'lang' => 'ch', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],


            // Notify User on Virtual Card Issue Email
            [
                'name' => 'Notify User on Virtual Card Issue',
                'alias' => 'notify-user-on-virtual-card-issue',
                'subject' => 'Virtual Card Issue Notification',
                'body' => 'Hi <b>{user}</b>,
                <br><br>Your requested virtual card has been <b>{status}</b>.
                 <br><br><b><u><i>Here’s a brief overview of the Application:</i></u></b>
                <br><br><b><u>Name:</u></b> {user}
                <br><br><b><u>Virtual Card Holder Type:</u></b> {type}
                <br><br><b><u>Preferred Currency:</u></b> {currency}
                <br><br>If you have any questions, please feel free to reply to this email.
                <br><br>Regards,
                <br><b>{soft_name}</b>',
                'language_id' => getLanguageId('en'),
                'lang' => 'en',
                'type' => 'email',
                'group' => 'Virtual Card',
                'status' => 'Active',
            ],
            ['name' => 'Notify User on Virtual Card Issue', 'alias' => 'notify-user-on-virtual-card-issue', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ar'), 'lang' => 'ar', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Issue', 'alias' => 'notify-user-on-virtual-card-issue', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('fr'), 'lang' => 'fr', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Issue', 'alias' => 'notify-user-on-virtual-card-issue', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('pt'), 'lang' => 'pt', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Issue', 'alias' => 'notify-user-on-virtual-card-issue', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ru'), 'lang' => 'ru', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Issue', 'alias' => 'notify-user-on-virtual-card-issue', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('es'), 'lang' => 'es', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Issue', 'alias' => 'notify-user-on-virtual-card-issue', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('tr'), 'lang' => 'tr', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Issue', 'alias' => 'notify-user-on-virtual-card-issue', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ch'), 'lang' => 'ch', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],


            // Notify User on Virtual Card Status Update Email
            [
                'name' => 'Notify User on Virtual Card Status Update',
                'alias' => 'notify-user-on-virtual-card-status-update',
                'subject' => 'Virtual Card Status Update Notification',
                'body' => 'Hi <b>{user}</b>,
                <br><br>Your virtual card status has been changed to <b>{status}</b>.
                 <br><br><b><u><i>Here’s a brief overview of the virtual card:</i></u></b>
                <br><br><b><u>Card Brand:</u></b> {card_brand}
                <br><br><b><u>Card Wallet:</u></b> {wallet}
                <br><br>If you have any questions, please feel free to reply to this email.
                <br><br>Regards,
                <br><b>{soft_name}</b>',
                'language_id' => getLanguageId('en'),
                'lang' => 'en',
                'type' => 'email',
                'group' => 'Virtual Card',
                'status' => 'Active',
            ],
            ['name' => 'Notify User on Virtual Card Status Update', 'alias' => 'notify-user-on-virtual-card-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ar'), 'lang' => 'ar', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Status Update', 'alias' => 'notify-user-on-virtual-card-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('fr'), 'lang' => 'fr', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Status Update', 'alias' => 'notify-user-on-virtual-card-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('pt'), 'lang' => 'pt', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Status Update', 'alias' => 'notify-user-on-virtual-card-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ru'), 'lang' => 'ru', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Status Update', 'alias' => 'notify-user-on-virtual-card-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('es'), 'lang' => 'es', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Status Update', 'alias' => 'notify-user-on-virtual-card-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('tr'), 'lang' => 'tr', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Status Update', 'alias' => 'notify-user-on-virtual-card-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ch'), 'lang' => 'ch', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],

            // Notify Admin on Topup Request Email
            [
                'name' => 'Notify Admin on Topup Request',
                'alias' => 'notify-admin-on-topup-request',
                'subject' => 'Topup Request Notification',
                'body' => 'Hi <b>{admin}</b>,
                <br><br><b>{user}</b> requested for Topup of <b>{amount}</b> on card <b>{card_number}</b>.
                <br><br><b><u><i>Here’s a brief overview of the Topup:</i></u></b>
                <br><br><b><u>Topup at:</u></b> {created_at}
                <br><br><b><u>Transaction ID:</u></b> {uuid}
                <br><br><b><u>Topup wallet:</u></b> {wallet}
                <br><br><b><u>Amount:</u></b> {amount}
                <br><br><b><u>Fee:</u></b> {fee}
                <br><br>Regards,
                <br><b>{soft_name}</b>',
                'language_id' => getLanguageId('en'),
                'lang' => 'en',
                'type' => 'email',
                'group' => 'Virtual Card',
                'status' => 'Active',
            ],
            ['name' => 'Notify Admin on Topup Request', 'alias' => 'notify-admin-on-topup-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ar'), 'lang' => 'ar', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on Topup Request', 'alias' => 'notify-admin-on-topup-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('fr'), 'lang' => 'fr', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on Topup Request', 'alias' => 'notify-admin-on-topup-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('pt'), 'lang' => 'pt', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on Topup Request', 'alias' => 'notify-admin-on-topup-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ru'), 'lang' => 'ru', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on Topup Request', 'alias' => 'notify-admin-on-topup-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('es'), 'lang' => 'es', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on Topup Request', 'alias' => 'notify-admin-on-topup-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('tr'), 'lang' => 'tr', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on Topup Request', 'alias' => 'notify-admin-on-topup-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ch'), 'lang' => 'ch', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],

            // Notify User on Topup status update Email
            [
                'name' => 'Notify User on Topup Status Update',
                'alias' => 'notify-user-on-topup-status-update',
                'subject' => 'Topup Status Update Notification',
                'body' => 'Hi <b>{user}</b>,
                <br><br>Your Topup request of <b>{amount}</b> for card <b>{card_number}</b> has been <b>{status}</b>.
                <br><br><b><u><i>Here’s a brief overview of the Topup:</i></u></b>
                <br><br><b><u>Topup at:</u></b> {created_at}
                <br><br><b><u>Transaction ID:</u></b> {uuid}
                <br><br><b><u>Topup wallet:</u></b> {wallet}
                <br><br><b><u>Amount:</u></b> {amount}
                <br><br><b><u>Fee:</u></b> {fee}
                <br><br>If you have any questions, please feel free to reply to this email.
                <br><br>Regards,
                <br><b>{soft_name}</b>',
                'language_id' => getLanguageId('en'),
                'lang' => 'en',
                'type' => 'email',
                'group' => 'Virtual Card',
                'status' => 'Active',
            ],
            ['name' => 'Notify User on Topup Status Update', 'alias' => 'notify-user-on-topup-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ar'), 'lang' => 'ar', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Topup Status Update', 'alias' => 'notify-user-on-topup-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('fr'), 'lang' => 'fr', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Topup Status Update', 'alias' => 'notify-user-on-topup-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('pt'), 'lang' => 'pt', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Topup Status Update', 'alias' => 'notify-user-on-topup-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ru'), 'lang' => 'ru', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Topup Status Update', 'alias' => 'notify-user-on-topup-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('es'), 'lang' => 'es', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Topup Status Update', 'alias' => 'notify-user-on-topup-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('tr'), 'lang' => 'tr', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Topup Status Update', 'alias' => 'notify-user-on-topup-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ch'), 'lang' => 'ch', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],

            // Notify Admin on Withdrawal Request Email
            [
                'name' => 'Notify Admin on Withdrawal Request',
                'alias' => 'notify-admin-on-withdrawal-request',
                'subject' => 'Withdrawal Request Notification',
                'body' => 'Hi <b>{admin}</b>,
                <br><br><b>{user}</b> requested for withdrawal of <b>{amount}</b> on card <b>{card_number}</b>.
                <br><br><b><u><i>Here’s a brief overview of the Withdrawal:</i></u></b>
                <br><br><b><u>Withdrawal at:</u></b> {created_at}
                <br><br><b><u>Withdrawal wallet:</u></b> {wallet}
                <br><br><b><u>Amount:</u></b> {amount}
                <br><br><b><u>Fee:</u></b> {fee}
                <br><br>Regards,
                <br><b>{soft_name}</b>',
                'language_id' => getLanguageId('en'),
                'lang' => 'en',
                'type' => 'email',
                'group' => 'Virtual Card',
                'status' => 'Active',
            ],
            ['name' => 'Notify Admin on Withdrawal Request', 'alias' => 'notify-admin-on-withdrawal-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ar'), 'lang' => 'ar', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on Withdrawal Request', 'alias' => 'notify-admin-on-withdrawal-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('fr'), 'lang' => 'fr', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on Withdrawal Request', 'alias' => 'notify-admin-on-withdrawal-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('pt'), 'lang' => 'pt', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on Withdrawal Request', 'alias' => 'notify-admin-on-withdrawal-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ru'), 'lang' => 'ru', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on Withdrawal Request', 'alias' => 'notify-admin-on-withdrawal-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('es'), 'lang' => 'es', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on Withdrawal Request', 'alias' => 'notify-admin-on-withdrawal-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('tr'), 'lang' => 'tr', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify Admin on Withdrawal Request', 'alias' => 'notify-admin-on-withdrawal-request', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ch'), 'lang' => 'ch', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],

            // Notify User on Withdrawal status update Email
            [
                'name' => 'Notify User on Withdrawal Status Update',
                'alias' => 'notify-user-on-withdrawal-status-update',
                'subject' => 'Withdrawal Status Update Notification',
                'body' => 'Hi <b>{user}</b>,
                <br><br>Your Withdrawal request of <b>{amount}</b> for card <b>{card_number}</b> has been <b>{status}</b>.
                <br><br><b><u><i>Here’s a brief overview of the Withdrawal:</i></u></b>
                <br><br><b><u>Withdrawal at:</u></b> {created_at}
                <br><br><b><u>Withdrawal wallet:</u></b> {wallet}
                <br><br><b><u>Amount:</u></b> {amount}
                <br><br><b><u>Fee:</u></b> {fee}
                <br><br>If you have any questions, please feel free to reply to this email.
                <br><br>Regards,
                <br><b>{soft_name}</b>',
                'language_id' => getLanguageId('en'),
                'lang' => 'en',
                'type' => 'email',
                'group' => 'Virtual Card',
                'status' => 'Active',
            ],
            ['name' => 'Notify User on Withdrawal Status Update', 'alias' => 'notify-user-on-withdrawal-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ar'), 'lang' => 'ar', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Withdrawal Status Update', 'alias' => 'notify-user-on-withdrawal-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('fr'), 'lang' => 'fr', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Withdrawal Status Update', 'alias' => 'notify-user-on-withdrawal-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('pt'), 'lang' => 'pt', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Withdrawal Status Update', 'alias' => 'notify-user-on-withdrawal-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ru'), 'lang' => 'ru', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Withdrawal Status Update', 'alias' => 'notify-user-on-withdrawal-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('es'), 'lang' => 'es', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Withdrawal Status Update', 'alias' => 'notify-user-on-withdrawal-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('tr'), 'lang' => 'tr', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Withdrawal Status Update', 'alias' => 'notify-user-on-withdrawal-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ch'), 'lang' => 'ch', 'type' => 'email', 'group' => 'Virtual Card', 'status' => 'Active'],

            // Notify User on Topup Status Update SMS
            [
                'name' => 'Notify User on Topup Status Update',
                'alias' => 'notify-user-on-topup-status-update',
                'subject' => 'Topup Status Update Notification',
                'body' => 'Hi {user}, Your Topup request of {amount} for card {card_number} has been {status}.',
                'language_id' => getLanguageId('en'),
                'lang' => 'en',
                'type' => 'sms',
                'group' => 'Virtual Card',
                'status' => 'Active',
            ],
            ['name' => 'Notify User on Topup Status Update', 'alias' => 'notify-user-on-topup-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ar'), 'lang' => 'ar', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Topup Status Update', 'alias' => 'notify-user-on-topup-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('fr'), 'lang' => 'fr', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Topup Status Update', 'alias' => 'notify-user-on-topup-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('pt'), 'lang' => 'pt', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Topup Status Update', 'alias' => 'notify-user-on-topup-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ru'), 'lang' => 'ru', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Topup Status Update', 'alias' => 'notify-user-on-topup-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('es'), 'lang' => 'es', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Topup Status Update', 'alias' => 'notify-user-on-topup-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('tr'), 'lang' => 'tr', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Topup Status Update', 'alias' => 'notify-user-on-topup-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ch'), 'lang' => 'ch', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],

            // Notify User on Virtual Card Application Approve/Reject SMS
            [
                'name' => 'Notify User on Virtual Card Application Approve/Reject',
                'alias' => 'notify-user-on-virtual-card-application-approve-reject',
                'subject' => 'Virtual Card {Approve/Reject} Notification',
                'body' => 'Hi {user}, Your requested virtual card application has been {status}. Here’s a brief overview of the Application: Name: {user},&nbsp; Virtual Card Holder Type: {type},&nbsp; Thank you for joining us. Best regards {soft_name}.',
                'language_id' => getLanguageId('en'),
                'lang' => 'en',
                'type' => 'sms',
                'group' => 'Virtual Card',
                'status' => 'Active',
            ],
            ['name' => 'Notify User on Virtual Card Application Approve/Reject', 'alias' => 'notify-user-on-virtual-card-application-approve-reject', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ar'), 'lang' => 'ar', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Application Approve/Reject', 'alias' => 'notify-user-on-virtual-card-application-approve-reject', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('fr'), 'lang' => 'fr', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Application Approve/Reject', 'alias' => 'notify-user-on-virtual-card-application-approve-reject', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('pt'), 'lang' => 'pt', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Application Approve/Reject', 'alias' => 'notify-user-on-virtual-card-application-approve-reject', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ru'), 'lang' => 'ru', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Application Approve/Reject', 'alias' => 'notify-user-on-virtual-card-application-approve-reject', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('es'), 'lang' => 'es', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Application Approve/Reject', 'alias' => 'notify-user-on-virtual-card-application-approve-reject', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('tr'), 'lang' => 'tr', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Application Approve/Reject', 'alias' => 'notify-user-on-virtual-card-application-approve-reject', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ch'), 'lang' => 'ch', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],

            // Notify User on Virtual Card Issue SMS
            [
                'name' => 'Notify User on Virtual Card Issue',
                'alias' => 'notify-user-on-virtual-card-issue',
                'subject' => 'Virtual Card Issue Notification',
                'body' => 'Hi {user}, Your requested virtual card has been {status}. Here’s a brief overview of the Application: Name: {user},&nbsp; Virtual Card Holder Type: {type},&nbsp; Preferred Currency: {currency},&nbsp;Thank you for joining us. Best regards {soft_name}.',
                'language_id' => getLanguageId('en'),
                'lang' => 'en',
                'type' => 'sms',
                'group' => 'Virtual Card',
                'status' => 'Active',
            ],
            ['name' => 'Notify User on Virtual Card Issue', 'alias' => 'notify-user-on-virtual-card-issue', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ar'), 'lang' => 'ar', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Issue', 'alias' => 'notify-user-on-virtual-card-issue', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('fr'), 'lang' => 'fr', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Issue', 'alias' => 'notify-user-on-virtual-card-issue', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('pt'), 'lang' => 'pt', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Issue', 'alias' => 'notify-user-on-virtual-card-issue', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ru'), 'lang' => 'ru', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Issue', 'alias' => 'notify-user-on-virtual-card-issue', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('es'), 'lang' => 'es', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Issue', 'alias' => 'notify-user-on-virtual-card-issue', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('tr'), 'lang' => 'tr', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Issue', 'alias' => 'notify-user-on-virtual-card-issue', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ch'), 'lang' => 'ch', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],

            // Notify User on Virtual Card Status Update SMS
            [
                'name' => 'Notify User on Virtual Card Status Update',
                'alias' => 'notify-user-on-virtual-card-status-update',
                'subject' => 'Virtual Card Status Update Notification',
                'body' => 'Hi {user}, Your virtual card status has been changed to {status}. Here’s a brief overview of the virtual card: Card Brand: {card_brand},&nbsp; Card Wallet: {wallet},&nbsp;Thank you for joining us. Best regards {soft_name}.',
                'language_id' => getLanguageId('en'),
                'lang' => 'en',
                'type' => 'sms',
                'group' => 'Virtual Card',
                'status' => 'Active',
            ],
            ['name' => 'Notify User on Virtual Card Status Update', 'alias' => 'notify-user-on-virtual-card-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ar'), 'lang' => 'ar', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Status Update', 'alias' => 'notify-user-on-virtual-card-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('fr'), 'lang' => 'fr', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Status Update', 'alias' => 'notify-user-on-virtual-card-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('pt'), 'lang' => 'pt', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Status Update', 'alias' => 'notify-user-on-virtual-card-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ru'), 'lang' => 'ru', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Status Update', 'alias' => 'notify-user-on-virtual-card-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('es'), 'lang' => 'es', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Status Update', 'alias' => 'notify-user-on-virtual-card-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('tr'), 'lang' => 'tr', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Virtual Card Status Update', 'alias' => 'notify-user-on-virtual-card-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ch'), 'lang' => 'ch', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],

            // Notify User on Withdrawal Status Update SMS
            [
                'name' => 'Notify User on Withdrawal Status Update',
                'alias' => 'notify-user-on-withdrawal-status-update',
                'subject' => 'Withdrawal Status Update Notification',
                'body' => 'Hi {user}, Your withdrawal request of {amount} for card {card_number} has been {status}.',
                'language_id' => getLanguageId('en'),
                'lang' => 'en',
                'type' => 'sms',
                'group' => 'Virtual Card',
                'status' => 'Active',
            ],
            ['name' => 'Notify User on Withdrawal Status Update', 'alias' => 'notify-user-on-withdrawal-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ar'), 'lang' => 'ar', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Withdrawal Status Update', 'alias' => 'notify-user-on-withdrawal-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('fr'), 'lang' => 'fr', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Withdrawal Status Update', 'alias' => 'notify-user-on-withdrawal-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('pt'), 'lang' => 'pt', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Withdrawal Status Update', 'alias' => 'notify-user-on-withdrawal-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ru'), 'lang' => 'ru', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Withdrawal Status Update', 'alias' => 'notify-user-on-withdrawal-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('es'), 'lang' => 'es', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Withdrawal Status Update', 'alias' => 'notify-user-on-withdrawal-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('tr'), 'lang' => 'tr', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
            ['name' => 'Notify User on Withdrawal Status Update', 'alias' => 'notify-user-on-withdrawal-status-update', 'subject' => '', 'body' => '', 'language_id' => getLanguageId('ch'), 'lang' => 'ch', 'type' => 'sms', 'group' => 'Virtual Card', 'status' => 'Active'],
        ]);
    }
}
