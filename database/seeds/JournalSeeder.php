<?php

use App\Journal;
use Illuminate\Database\Seeder;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Journal::truncate();

        Journal::insert([
            [
                'title' => 'PENERAPAN ALGORITMA TF-IDF UNTUK PENCARIAN KARYA ILMIAH',
                'abstract' => 'Sorting a scientific paper can be done easily by humans, but sorting of documents is done automatically by the computer will bring its own problems. Similarly, by measuring the level of similarity of a document with other documents, humans can easily measure whether a document has the level of similarity/similaritas with other documents. Keyword that is used in the extraction process document in the process of sorting the categories document. In order for the results of the measurement of level of similaritas documents with keywords to get optimal results then used algorithms for text mining algorithm used in the process whereby the TF-IDF (Term Frequency – Inversed Document Frequency) of the model IR (information retrieval) as a measure of the level of similaritas between documents with keywords obtained from the extraction of the text in the document. The purpose of this study was to apply the algorithm TF -IDF that can be used to find the scientific papers as the measuring level similaritas between document s with keywords obtained from the extraction of the text in the document so that it gets sorted data from that similarity (level similaritas) most high so the search papers become more efficient as the relevant information',
                'keywords' => 'TF-IDF, Scientific Papers',
                'authors' => 'Abdul Azis Maarif',
            ],
            [
                'title' => 'Pembuatan Sistem Pencarian Pekerjaan Menggunakan TF-IDF',
                'abstract' => 'Over time, human life continues to change. Likewise for the context of human work as an activity to fulfill needs. However, in the process of delivering information work is still constrained by the process of delivering information from job providers to job seekers, thus impacting job seekers who have difficulty getting information about job vacancies, as well as the process of registering for jobs in accordance with the wishes of job seekers. From the problems above, we need an update to make it easier for job seekers to find jobs, in this case the search for job vacancies. In this study a search engine was created to make it easier for job seekers to get job information in accordance with the keywords entered by users, using the TF-IDF method. The results of the system testing show that the TF-IDF method is longer in the search process compared to the full query but provides more relevant search results than the full query.',
                'keywords' => 'search engine, jobs, information retrieval, TF-IDF',
                'authors' => 'Arif Tirtana, Adnan Zulkarnain, Yohanes Dwi Listio',
            ],
            [
                'title' => 'Pembuatan Aplikasi Web Berbasis PWA Menggunakan C++',
                'abstract' => 'C++ is general-purpose object-oriented programming (OOP) language developed by Bjarne Stroustrup. Originally, C++ was called “C with classes,” as it had all the properties of the C language with the addition of user-defined data types called “classes.” It was renamed C++ in 1983. C++ is considered an intermediate-level language, as it includes both high and low-level language features. C++ can be coded in C style or object-oriented style. In certain scenarios, it can be coded either way - making C++ a good example of a hybrid language. Since C++ allows to manipulate the processor on a lower level, it is quite faster than advanced level languages like Python or C#.',
                'keywords' => 'c++, pwa, web',
                'authors' => 'I Gede Wahyu Budi Saputra, Marvel Alexius',
            ]
        ]);
    }
}
