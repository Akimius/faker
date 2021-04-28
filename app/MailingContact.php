<?php

namespace App;

use Database\Factories\MailingContactFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailingContact extends BaseModel
{
    protected $table = 'mailing_contact';

    /**
     * @param int $count
     */
    public function outputToCsv(int $count): void
    {
        $separator = ';';

        $rows = self::factory()->count($count)->make();

        $file = fopen('all_contacts.csv', 'wb');

        fputcsv(
            $file,
            [
                'Email',
                'Phone',
                'First Name',
                'Last Name',
                'Country',
                'City',
                'Address',
                'State',
                'Zip',
                'Gender',
                'Day of Birth',
            ],
            $separator
        );

        foreach ($rows as $row) {
            fputcsv($file, $row->toArray(), $separator);
        }

        fclose($file);
    }
}
