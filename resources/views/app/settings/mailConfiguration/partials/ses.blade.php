TODO: add link to SES setup instructions

<x-text-field label="Key" name="ses_key" type="text" :value="$mailConfiguration->ses_key"/>
<x-text-field label="Secret" name="ses_secret" type="password" :value="$mailConfiguration->ses_secret"/>
<x-text-field label="Region" name="ses_region" type="text"
                :value="$mailConfiguration->ses_region"/>

<br />
You must set a webhook to {{ url(action(\Spatie\MailcoachSesFeedback\SesWebhookController::class)) }}