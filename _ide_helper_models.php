<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Bab
 *
 * @property int $id
 * @property string|null $nama_bab
 * @method static \Illuminate\Database\Eloquent\Builder|Bab newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bab newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bab query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bab whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bab whereNamaBab($value)
 */
	class Bab extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Berkas
 *
 * @property int $id
 * @property int|null $mufrodat_id
 * @property int|null $muhadasa_id
 * @property int|null $tadrib_id
 * @property int|null $qasirah_id
 * @property int|null $qisah_id
 * @property int|null $tamrin_id
 * @property int|null $qiroah_id
 * @property int|null $kitabah_id
 * @property int|null $qawait_id
 * @property int|null $istima_tamrin_id
 * @property string|null $file_name
 * @property int|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Berkas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Berkas newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Berkas query()
 * @method static \Illuminate\Database\Eloquent\Builder|Berkas whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berkas whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berkas whereIstimaTamrinId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berkas whereKitabahId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berkas whereMufrodatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berkas whereMuhadasaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berkas whereQasirahId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berkas whereQawaitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berkas whereQiroahId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berkas whereQisahId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berkas whereTadribId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berkas whereTamrinId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berkas whereType($value)
 */
	class Berkas extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Fiil
 *
 * @property int $id
 * @property string|null $dhamir
 * @property string|null $madhi
 * @property string|null $arti
 * @property string|null $keterangan
 * @property int|null $jenis
 * @property int|null $bab
 * @method static \Illuminate\Database\Eloquent\Builder|Fiil newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fiil newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fiil query()
 * @method static \Illuminate\Database\Eloquent\Builder|Fiil whereArti($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiil whereBab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiil whereDhamir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiil whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiil whereJenis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiil whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiil whereMadhi($value)
 */
	class Fiil extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\IstimaTamrin
 *
 * @property int $id
 * @property int|null $nomor
 * @property int|null $bab
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Berkas[] $berkas
 * @property-read int|null $berkas_count
 * @method static \Illuminate\Database\Eloquent\Builder|IstimaTamrin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IstimaTamrin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IstimaTamrin query()
 * @method static \Illuminate\Database\Eloquent\Builder|IstimaTamrin whereBab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IstimaTamrin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IstimaTamrin whereNomor($value)
 */
	class IstimaTamrin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Jawaban
 *
 * @property int $id
 * @property int|null $tadrib_id
 * @property string|null $jawaban
 * @method static \Illuminate\Database\Eloquent\Builder|Jawaban newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jawaban newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jawaban query()
 * @method static \Illuminate\Database\Eloquent\Builder|Jawaban whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jawaban whereJawaban($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jawaban whereTadribId($value)
 */
	class Jawaban extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Kitabah
 *
 * @property int $id
 * @property int|null $bab
 * @property string|null $text
 * @property int|null $tamrin
 * @property string|null $link
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Berkas[] $berkas
 * @property-read int|null $berkas_count
 * @method static \Illuminate\Database\Eloquent\Builder|Kitabah newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kitabah newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kitabah query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kitabah whereBab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kitabah whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kitabah whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kitabah whereTamrin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kitabah whereText($value)
 */
	class Kitabah extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Mufrodat
 *
 * @property int $id
 * @property int|null $bab
 * @property string|null $nama
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Berkas[] $berkas
 * @property-read int|null $berkas_count
 * @method static \Illuminate\Database\Eloquent\Builder|Mufrodat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mufrodat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mufrodat query()
 * @method static \Illuminate\Database\Eloquent\Builder|Mufrodat whereBab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mufrodat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mufrodat whereNama($value)
 */
	class Mufrodat extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Muhadasa
 *
 * @property int $id
 * @property int|null $soal
 * @property int|null $bab
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Berkas[] $berkas
 * @property-read int|null $berkas_count
 * @method static \Illuminate\Database\Eloquent\Builder|Muhadasa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Muhadasa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Muhadasa query()
 * @method static \Illuminate\Database\Eloquent\Builder|Muhadasa whereBab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Muhadasa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Muhadasa whereSoal($value)
 */
	class Muhadasa extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Qasirah
 *
 * @property int $id
 * @property int|null $bab
 * @property int|null $nomor
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Berkas[] $berkas
 * @property-read int|null $berkas_count
 * @method static \Illuminate\Database\Eloquent\Builder|Qasirah newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Qasirah newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Qasirah query()
 * @method static \Illuminate\Database\Eloquent\Builder|Qasirah whereBab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Qasirah whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Qasirah whereNomor($value)
 */
	class Qasirah extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Qawait
 *
 * @property int $id
 * @property int|null $bab
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Berkas[] $berkas
 * @property-read int|null $berkas_count
 * @method static \Illuminate\Database\Eloquent\Builder|Qawait newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Qawait newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Qawait query()
 * @method static \Illuminate\Database\Eloquent\Builder|Qawait whereBab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Qawait whereId($value)
 */
	class Qawait extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Qiroah
 *
 * @property int $id
 * @property int|null $bab
 * @property string|null $text
 * @property string|null $soal
 * @property string|null $link
 * @property int|null $tamrin
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Berkas[] $berkas
 * @property-read int|null $berkas_count
 * @method static \Illuminate\Database\Eloquent\Builder|Qiroah newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Qiroah newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Qiroah query()
 * @method static \Illuminate\Database\Eloquent\Builder|Qiroah whereBab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Qiroah whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Qiroah whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Qiroah whereSoal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Qiroah whereTamrin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Qiroah whereText($value)
 */
	class Qiroah extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Qisah
 *
 * @property int $id
 * @property int|null $bab
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Berkas[] $berkas
 * @property-read int|null $berkas_count
 * @method static \Illuminate\Database\Eloquent\Builder|Qisah newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Qisah newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Qisah query()
 * @method static \Illuminate\Database\Eloquent\Builder|Qisah whereBab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Qisah whereId($value)
 */
	class Qisah extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tadrib
 *
 * @property int $id
 * @property int|null $bab
 * @property int|null $nomor_soal
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Berkas[] $berkas
 * @property-read int|null $berkas_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Jawaban[] $jawaban
 * @property-read int|null $jawaban_count
 * @method static \Illuminate\Database\Eloquent\Builder|Tadrib newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tadrib newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tadrib query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tadrib whereBab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tadrib whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tadrib whereNomorSoal($value)
 */
	class Tadrib extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tamrin
 *
 * @property int $id
 * @property int|null $bab
 * @property int|null $nomor_soal
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Berkas[] $berkas
 * @property-read int|null $berkas_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Jawaban[] $jawaban
 * @property-read int|null $jawaban_count
 * @method static \Illuminate\Database\Eloquent\Builder|Tamrin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tamrin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tamrin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tamrin whereBab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tamrin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tamrin whereNomorSoal($value)
 */
	class Tamrin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class User extends \Eloquent {}
}

