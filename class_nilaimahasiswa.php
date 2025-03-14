<?php 
/**
 * Class NilaiMahasiswa
 */
class NilaiMahasiswa{
    /**
     * Properties
     * @var string $nama
     */
    public $nama;

    /**
     * Properties
     * @var string $matakuliah
     */
    public $matakuliah;

    public $nilai_uts;
    public $nilai_uas;
    public $nilai_tugas;

    public const PERSENTASE_UTS = 0.25;
    public const PERSENTASE_UAS = 0.30;
    public const PERSENTASE_TUGAS = 0.45;
    
    /**
     * Konstanta KKM = Kriteria Ketuntasan Minimal
     */
    public const KKM = 60;

    public function getNilaiAkhir() {
        $nilai_akhir = (self::PERSENTASE_UTS * $this->nilai_uts) 
        + (self::PERSENTASE_UAS * $this->nilai_uas) 
        + (self::PERSENTASE_TUGAS * $this->nilai_tugas);
        return $nilai_akhir;
    }

    public function kelulusan() {
        if ($this->getNilaiAkhir() >= self::KKM) {
            return "LULUS";
        } else {
            return "TIDAK LULUS";
        }
    }


}

?>