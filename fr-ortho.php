<?php 

class Tools
{

    /**
     * Pluralize french word
     * @param  string $singular The word you want to pluralize
     * @param  int $nb          Number of element, the value need to be more than 1
     * @param  string $plural   The plural of the word (FOR EXCEPTION)
     * @return string           The plural of the word
     */
    public static function ortho($singular, $nb, $plural = null) {

        if (empty($nb) || $nb == 1 || $singular == $plural) {
            return $singular;
        }

        else if (!empty($plural)) {
            return $plural;
        }

        // - Exception des mots en 'eu'
        else if (in_array($singular, ['bleu', 'pneu'])) {
            return "{$singular}s";
        }

        // - Exception des mots en 'au'
        else if (in_array($singular, ['landau', 'sarrau'])) {
            return "{$singular}s";
        }

        // - Exception des mots en 'al'
        else if (in_array($singular, ['bal', 'festival', 'carnaval'])) {
            return "{$singular}s";
        }

        // - Exception des mots en 'ou'
        else if (in_array($singular, ['caillou', 'bijou', 'genou', 'joujou', 'chou', 'hibou', 'pou'])) {
            return "{$singular}x";
        }

        // - Exception des mots en 'ail'
        else if (in_array($singular, ['vitrail', 'bail', 'corail', 'émail', 'soupirail', 'travail', 'vantail'])) {
            return preg_replace('/ail/', 'aux', $singular);
        }

        // - Si aucun pluriel n'est transmis le mot prendre la marque du pluriel
        else if (is_null($plural)) {

            $letters = preg_split('//', $singular, -1, PREG_SPLIT_NO_EMPTY);
            $word_length = strlen($singular);

            if ($word_length >= 1) {
                $last_letter = $letters[$word_length - 1];
            }

            if ($word_length >= 2) {
                $last_2_letters = $letters[$word_length - 2].$last_letter;
            }

            if ($word_length >= 3) {
                $last_3_letters = $letters[$word_length - 3].$last_2_letters;
            }

            // - Mot invariable - si termine par s ou z
            if ($last_letter == 's' || $last_letter == 'x') {
                return $singular;
            }
            
            // - Mot finissant par 'au' ou 'eu'
            else if ($last_2_letters == 'au' || $last_2_letters == 'eu') {
                return "{$singular}x";
            }

            // - Mot finissant par 'al'
            else if ($last_2_letters == 'al') {
                return preg_replace('/al/', 'aux', $singular);
            }
            
            // - Autres mots (y compris ceux finissant par 'ou' ou 'ail')
            return "{$singular}s";

        }

    }

}