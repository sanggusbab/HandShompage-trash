<!DOCTYPE html><!--
	Copyright (c) 2014-2023, CKSource Holding sp. z o.o. All rights reserved.
	This file is licensed under the terms of the MIT License (see LICENSE.md).
-->

<html>

<head>
    <title>CKEditor 5 ClassicEditor build</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="https://c.cksource.com/a/1/logos/ckeditor5.png">
    <link rel="stylesheet" type="text/css" href="./cssIndexes/writingPageIndex/style.css">
</head>

<body data-editor="ClassicEditor" data-collaboration="false" data-revision-history="false">
    <header>
        <div class="centered">
            <h1><a href="https://ckeditor.com/ckeditor-5/" target="_blank" rel="noopener noreferrer"><img src="https://c.cksource.com/a/1/logos/ckeditor5.svg" alt="CKEditor 5 logo">CKEditor 5</a></h1>
            <nav>
                <ul>
                    <li><a href="https://ckeditor.com/docs/ckeditor5/" target="_blank" rel="noopener noreferrer">Documentation</a></li>
                    <li><a href="https://ckeditor.com/" target="_blank" rel="noopener noreferrer">Website</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="message">
            <div class="centered">
                <h2>CKEditor 5 online builder demo - ClassicEditor build</h2>
            </div>
        </div>
        <div class="centered">
            <div class="row row-editor">
                <div class="editor-container">
                    <div class="editor">
                        <h2>Bilingual Personality Disorder</h2>
                        <figure class="image image-style-side"><img src="https://c.cksource.com/a/1/img/docs/sample-image-bilingual-personality-disorder.jpg">
                            <figcaption>One language, one person.</figcaption>
                        </figure>
                        <p>
                            This may be the first time you hear about this made-up disorder but
                            it actually isn’t so far from the truth. Even the studies that were conducted almost half a century show that
                            <strong>the language you speak has more effects on you than you realise</strong>.
                        </p>
                        <p>
                            One of the very first experiments conducted on this topic dates back to 1964.
                            <a href="https://www.researchgate.net/publication/9440038_Language_and_TAT_content_in_bilinguals">In the experiment</a>
                            designed by linguist Ervin-Tripp who is an authority expert in psycholinguistic and sociolinguistic studies,
                            adults who are bilingual in English in French were showed series of pictures and were asked to create 3-minute stories.
                            In the end participants emphasized drastically different dynamics for stories in English and French.
                        </p>
                        <p>
                            Another ground-breaking experiment which included bilingual Japanese women married to American men in San Francisco were
                            asked to complete sentences. The goal of the experiment was to investigate whether or not human feelings and thoughts
                            are expressed differently in <strong>different language mindsets</strong>.
                            Here is a sample from the the experiment:
                        </p>
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>English</th>
                                    <th>Japanese</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Real friends should</td>
                                    <td>Be very frank</td>
                                    <td>Help each other</td>
                                </tr>
                                <tr>
                                    <td>I will probably become</td>
                                    <td>A teacher</td>
                                    <td>A housewife</td>
                                </tr>
                                <tr>
                                    <td>When there is a conflict with family</td>
                                    <td>I do what I want</td>
                                    <td>It's a time of great unhappiness</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>
                            More recent <a href="https://books.google.pl/books?id=1LMhWGHGkRUC">studies</a> show, the language a person speaks affects
                            their cognition, behaviour, emotions and hence <strong>their personality</strong>.
                            This shouldn’t come as a surprise
                            <a href="https://en.wikipedia.org/wiki/Lateralization_of_brain_function">since we already know</a> that different regions
                            of the brain become more active depending on the person’s activity at hand. Since structure, information and especially
                            <strong>the culture</strong> of languages varies substantially and the language a person speaks is an essential element of daily life.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <footer>
        <p><a href="https://ckeditor.com/ckeditor-5/" target="_blank" rel="noopener">CKEditor 5</a>
            – Rich text editor of tomorrow, available today
        </p>
        <p>Copyright © 2003-2023,
            <a href="https://cksource.com/" target="_blank" rel="noopener">CKSource</a>
            Holding sp. z o.o. All rights reserved.
        </p>
    </footer>
    <script src="./js/ckeditor.js"></script>
    <script>
        const watchdog = new CKSource.EditorWatchdog();

        window.watchdog = watchdog;

        watchdog.setCreator((element, config) => {
            return CKSource.Editor
                .create(element, config)
                .then(editor => {




                    return editor;
                })
        });

        watchdog.setDestructor(editor => {



            return editor.destroy();
        });

        watchdog.on('error', handleError);

        watchdog
            .create(document.querySelector('.editor'), {

                licenseKey: '',



            })
            .catch(handleError);

        function handleError(error) {
            console.error('Oops, something went wrong!');
            console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
            console.warn('Build id: ayt95fwd64yv-l8kgf43xn3t');
            console.error(error);
        }
    </script>
</body>

</html>