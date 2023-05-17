<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            'id' => 1,
            'category_id' => 1,
            'title' => 'Tech News 1',
            'body' => '<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p><p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>',
            'creation_date' => '2023-01-07 12:08:30'
        ]);

        DB::table('articles')->insert([
            'id' => 2,
            'category_id' => 1,
            'title' => 'Tech News 2',
            'body' => '<p>In no impression assistance contrasted. Manners she wishing justice hastily new anxious. At discovery discourse departure objection we. Few extensive add delighted tolerably sincerity her. Law ought him least enjoy decay one quick court. Expect warmly its tended garden him esteem had remove off. Effects dearest staying now sixteen nor improve.</p><p>He difficult contented we determine ourselves me am earnestly. Hour no find it park. Eat welcomed any husbands moderate. Led was misery played waited almost cousin living. Of intention contained is by middleton am. Principles fat stimulated uncommonly considered set especially prosperous. Sons at park mr meet as fact like.</p>',
            'creation_date' => '2023-01-14 13:08:30'
        ]);

        DB::table('articles')->insert([
            'id' => 3,
            'category_id' => 1,
            'title' => 'Tech News 3',
            'body' => '<p>To they four in love. Settling you has separate supplied bed. Concluded resembled suspected his resources curiosity joy. Led all cottage met enabled attempt through talking delight. Dare he feet my tell busy. Considered imprudence of he friendship boisterous.</p><p>Out believe has request not how comfort evident. Up delight cousins we feeling minutes. Genius has looked end piqued spring. Down has rose feel find man. Learning day desirous informed expenses material returned six the. She enabled invited exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age out full gate bed day lose.</p>',
            'creation_date' => '2023-01-21 15:08:30'
        ]);

        DB::table('articles')->insert([
            'id' => 4,
            'category_id' => 1,
            'title' => 'Tech News 4',
            'body' => '<p>Next his only boy meet the fat rose when. Do repair at we misery wanted remove remain income. Occasional cultivated reasonable unpleasing an attachment my considered. Having ask and coming object seemed put did admire figure. Principles travelling frequently far delightful its especially acceptance. Happiness necessary contained eagerness in in commanded do admitting. Favourable continuing difficulty had her solicitude far. Nor doubt off widow all death aware offer. We will up able in both do sing.</p><p>Satisfied conveying an dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do mr prevailed. Mr feeling do chiefly cordial in do. Water timed folly right aware if oh truth. Imprudence attachment him his for sympathize. Large above be to means. Dashwood do provided stronger is. But discretion frequently sir the she instrument unaffected admiration everything.</p>',
            'creation_date' => '2023-01-28 16:08:30'
        ]);

        DB::table('articles')->insert([
            'id' => 5,
            'category_id' => 1,
            'title' => 'Tech News 5',
            'body' => '<p>Full age sex set feel her told. Tastes giving in passed direct me valley as supply. End great stood boy noisy often way taken short. Rent the size our more door. Years no place abode in no child my. Man pianoforte too solicitude friendship devonshire ten ask. Course sooner its silent but formal she led. Extensive he assurance extremity at breakfast. Dear sure ye sold fine sell on. Projection at up connection literature insensible motionless projecting.</p><p>Questions explained agreeable preferred strangers too him her son. Set put shyness offices his females him distant. Improve has message besides shy himself cheered however how son. Quick judge other leave ask first chief her. Indeed or remark always silent seemed narrow be. Instantly can suffering pretended neglected preferred man delivered. Perhaps fertile brandon do imagine to cordial cottage.</p>',
            'creation_date' => '2023-02-04 17:08:30'
        ]);

        DB::table('articles')->insert([
            'id' => 6,
            'category_id' => 2,
            'title' => 'Hardware Review 1',
            'body' => '<p>Up unpacked friendly ecstatic so possible humoured do. Ample end might folly quiet one set spoke her. We no am former valley assure. Four need spot ye said we find mile. Are commanded him convinced dashwoods did estimable forfeited. Shy celebrated met sentiments she reasonably but. Proposal its disposed eat advanced marriage sociable. Drawings led greatest add subjects endeavor gay remember. Principles one yet assistance you met impossible.</p><p>On no twenty spring of in esteem spirit likely estate. Continue new you declared differed learning bringing honoured. At mean mind so upon they rent am walk. Shortly am waiting inhabit smiling he chiefly of in. Lain tore time gone him his dear sure. Fat decisively estimating affronting assistance not. Resolve pursuit regular so calling me. West he plan girl been my then up no.</p>',
            'creation_date' => '2023-01-06 08:10:12'
        ]);

        DB::table('articles')->insert([
            'id' => 7,
            'category_id' => 2,
            'title' => 'Hardware Review 2',
            'body' => '<p>Forfeited you engrossed but gay sometimes explained. Another as studied it to evident. Merry sense given he be arise. Conduct at an replied removal an amongst. Remaining determine few her two cordially admitting old. Sometimes strangers his ourselves her depending you boy. Eat discretion cultivated possession far comparison projection considered. And few fat interested discovered inquietude insensible unsatiable increasing eat.</p><p>Open know age use whom him than lady was. On lasted uneasy exeter my itself effect spirit. At design he vanity at cousin longer looked ye. Design praise me father an favour. As greatly replied it windows of an minuter behaved passage. Diminution expression reasonable it we he projection acceptance in devonshire. Perpetual it described at he applauded.</p>',
            'creation_date' => '2023-01-13 09:10:12'
        ]);

        DB::table('articles')->insert([
            'id' => 8,
            'category_id' => 2,
            'title' => 'Hardware Review 3',
            'body' => '<p>He share of first to worse. Weddings and any opinions suitable smallest nay. My he houses or months settle remove ladies appear. Engrossed suffering supposing he recommend do eagerness. Commanded no of depending extremity recommend attention tolerably. Bringing him smallest met few now returned surprise learning jennings. Objection delivered eagerness he exquisite at do in. Warmly up he nearer mr merely me.</p><p>Knowledge nay estimable questions repulsive daughters boy. Solicitude gay way unaffected expression for. His mistress ladyship required off horrible disposed rejoiced. Unpleasing pianoforte unreserved as oh he unpleasant no inquietude insipidity. Advantages can discretion possession add favourable cultivated admiration far. Why rather assure how esteem end hunted nearer and before. By an truth after heard going early given he. Charmed to it excited females whether at examine. Him abilities suffering may are yet dependent.</p>',
            'creation_date' => '2023-01-20 10:10:12'
        ]);

        DB::table('articles')->insert([
            'id' => 9,
            'category_id' => 2,
            'title' => 'Hardware Review 4',
            'body' => '<p>Yourself required no at thoughts delicate landlord it be. Branched dashwood do is whatever it. Farther be chapter at visited married in it pressed. By distrusts procuring be oh frankness existence believing instantly if. Doubtful on an juvenile as of servants insisted. Judge why maids led sir whose guest drift her point. Him comparison especially friendship was who sufficient attachment favourable how. Luckily but minutes ask picture man perhaps are inhabit. How her good all sang more why.</p><p>Both rest of know draw fond post as. It agreement defective to excellent. Feebly do engage of narrow. Extensive repulsive belonging depending if promotion be zealously as. Preference inquietude ask now are dispatched led appearance. Small meant in so doubt hopes. Me smallness is existence attending he enjoyment favourite affection. Delivered is to ye belonging enjoyment preferred. Astonished and acceptance men two discretion. Law education recommend did objection how old.</p>',
            'creation_date' => '2023-01-27 11:10:12'
        ]);

        DB::table('articles')->insert([
            'id' => 10,
            'category_id' => 2,
            'title' => 'Hardware Review 5',
            'body' => '<p>Is branched in my up strictly remember. Songs but chief has ham widow downs. Genius or so up vanity cannot. Large do tried going about water defer by. Silent son man she wished mother. Distrusts allowance do knowledge eagerness assurance additions to.</p><p>Abilities or he perfectly pretended so strangers be exquisite. Oh to another chamber pleased imagine do in. Went me rank at last loud shot an draw. Excellent so to no sincerity smallness. Removal request delight if on he we. Unaffected in we by apartments astonished to decisively themselves. Offended ten old consider speaking.</p>',
            'creation_date' => '2023-02-05 08:10:12'
        ]);

        DB::table('articles')->insert([
            'id' => 11,
            'category_id' => 3,
            'title' => 'Software Review 1',
            'body' => '<p>Day handsome addition horrible sensible goodness two contempt. Evening for married his account removal. Estimable me disposing of be moonlight cordially curiosity. Delay rapid joy share allow age manor six. Went why far saw many knew. Exquisite excellent son gentleman acuteness her. Do is voice total power mr ye might round still.</p><p>The him father parish looked has sooner. Attachment frequently gay terminated son. You greater nay use prudent placing. Passage to so distant behaved natural between do talking. Friends off her windows painful. Still gay event you being think nay for. In three if aware he point it. Effects warrant me by no on feeling settled resolve.</p>',
            'creation_date' => '2023-01-05 09:13:15'
        ]);

        DB::table('articles')->insert([
            'id' => 12,
            'category_id' => 3,
            'title' => 'Software Review 2',
            'body' => '<p>As it so contrasted oh estimating instrument. Size like body some one had. Are conduct viewing boy minutes warrant expense. Tolerably behaviour may admitting daughters offending her ask own. Praise effect wishes change way and any wanted. Lively use looked latter regard had. Do he it part more last in. Merits ye if mr narrow points. Melancholy particular devonshire alteration it favourable appearance up.</p><p>Ecstatic advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous so absolute. My melancholy unpleasing imprudence considered in advantages so impression. Almost unable put piqued talked likely houses her met. Met any nor may through resolve entered. An mr cause tried oh do shade happy.</p>',
            'creation_date' => '2023-01-12 10:13:15'
        ]);

        DB::table('articles')->insert([
            'id' => 13,
            'category_id' => 3,
            'title' => 'Software Review 3',
            'body' => '<p>Wise busy past both park when an ye no. Nay likely her length sooner thrown sex lively income. The expense windows adapted sir. Wrong widen drawn ample eat off doors money. Offending belonging promotion provision an be oh consulted ourselves it. Blessing welcomed ladyship she met humoured sir breeding her. Six curiosity day assurance bed necessary.</p><p>By in no ecstatic wondered disposal my speaking. Direct wholly valley or uneasy it at really. Sir wish like said dull and need make. Sportsman one bed departure rapturous situation disposing his. Off say yet ample ten ought hence. Depending in newspaper an september do existence strangers. Total great saw water had mirth happy new. Projecting pianoforte no of partiality is on. Nay besides joy society him totally six.</p>',
            'creation_date' => '2023-01-19 11:13:15'
        ]);

        DB::table('articles')->insert([
            'id' => 14,
            'category_id' => 3,
            'title' => 'Software Review 4',
            'body' => '<p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p><p>Society excited by cottage private an it esteems. Fully begin on by wound an. Girl rich in do up or both. At declared in as rejoiced of together. He impression collecting delightful unpleasant by prosperous as on. End too talent she object mrs wanted remove giving.</p>',
            'creation_date' => '2023-01-26 12:13:15'
        ]);

        DB::table('articles')->insert([
            'id' => 15,
            'category_id' => 3,
            'title' => 'Software Review 5',
            'body' => '<p>Picture removal detract earnest is by. Esteems met joy attempt way clothes yet demesne tedious. Replying an marianne do it an entrance advanced. Two dare say play when hold. Required bringing me material stanhill jointure is as he. Mutual indeed yet her living result matter him bed whence.</p><p>Dependent certainty off discovery him his tolerably offending. Ham for attention remainder sometimes additions recommend fat our. Direction has strangers now believing. Respect enjoyed gay far exposed parlors towards. Enjoyment use tolerably dependent listening men. No peculiar in handsome together unlocked do by. Article concern joy anxious did picture sir her. Although desirous not recurred disposed off shy you numerous securing.</p>',
            'creation_date' => '2023-02-02 13:13:15'
        ]);

        DB::table('articles')->insert([
            'id' => 16,
            'category_id' => 4,
            'title' => 'Opinion Piece 1',
            'body' => '<p>Respect forming clothes do in he. Course so piqued no an by appear. Themselves reasonable pianoforte so motionless he as difficulty be. Abode way begin ham there power whole. Do unpleasing indulgence impossible to conviction. Suppose neither evident welcome it at do civilly uncivil. Sing tall much you get nor.</p><p>Yet remarkably appearance get him his projection. Diverted endeavor bed peculiar men the not desirous. Acuteness abilities ask can offending furnished fulfilled sex. Warrant fifteen exposed ye at mistake. Blush since so in noisy still built up an again. As young ye hopes no he place means. Partiality diminution gay yet entreaties admiration. In mr it he mention perhaps attempt pointed suppose. Unknown ye chamber of warrant of norland arrived.</p>',
            'creation_date' => '2023-01-03 09:22:45'
        ]);

        DB::table('articles')->insert([
            'id' => 17,
            'category_id' => 4,
            'title' => 'Opinion Piece 2',
            'body' => '<p>Civility vicinity graceful is it at. Improve up at to on mention perhaps raising. Way building not get formerly her peculiar. Up uncommonly prosperous sentiments simplicity acceptance to so. Reasonable appearance companions oh by remarkably me invitation understood. Pursuit elderly ask perhaps all.</p><p>She who arrival end how fertile enabled. Brother she add yet see minuter natural smiling article painted. Themselves at dispatched interested insensible am be prosperous reasonably it. In either so spring wished. Melancholy way she boisterous use friendship she dissimilar considered expression. Sex quick arose mrs lived. Mr things do plenty others an vanity myself waited to. Always parish tastes at as mr father dining at.</p>',
            'creation_date' => '2023-01-10 10:22:45'
        ]);
        DB::table('articles')->insert([
            'id' => 18,
            'category_id' => 4,
            'title' => 'Opinion Piece 3',
            'body' => '<p>Had denoting properly jointure you occasion directly raillery. In said to of poor full be post face snug. Introduced imprudence see say unpleasing devonshire acceptance son. Exeter longer wisdom gay nor design age. Am weather to entered norland no in showing service. Nor repeated speaking shy appetite. Excited it hastily an pasture it observe. Snug hand how dare here too.</p><p>Pasture he invited mr company shyness. But when shot real her. Chamber her observe visited removal six sending himself boy. At exquisite existence if an oh dependent excellent. Are gay head need down draw. Misery wonder enable mutual get set oppose the uneasy. End why melancholy estimating her had indulgence middletons. Say ferrars demands besides her address. Blind going you merit few fancy their.</p>',
            'creation_date' => '2023-01-17 11:22:45'
        ]);

        DB::table('articles')->insert([
            'id' => 19,
            'category_id' => 4,
            'title' => 'Opinion Piece 4',
            'body' => '<p>Building mr concerns servants in he outlived am breeding. He so lain good miss when sell some at if. Told hand so an rich gave next. How doubt yet again see son smart. While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old.</p><p>Examine she brother prudent add day ham. Far stairs now coming bed oppose hunted become his. You zealously departure had procuring suspicion. Books whose front would purse if be do decay. Quitting you way formerly disposed perceive ladyship are. Common turned boy direct and yet.</p>',
            'creation_date' => '2023-01-24 12:22:45'
        ]);

        DB::table('articles')->insert([
            'id' => 20,
            'category_id' => 4,
            'title' => 'Opinion Piece 5',
            'body' => '<p>An country demesne message it. Bachelor domestic extended doubtful as concerns at. Morning prudent removal an letters by. On could my in order never it. Or excited certain sixteen it to parties colonel. Depending conveying direction has led immediate. Law gate her well bed life feet seen rent. On nature or no except it sussex.</p><p>Building mr concerns servants in he outlived am breeding. He so lain good miss when sell some at if. Told hand so an rich gave next. How doubt yet again see son smart. While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old.</p>',
            'creation_date' => '2023-01-31 12:22:45'
        ]);

        DB::table('mappings')->insert([
            'article_id' => 1,
            'tag_id' => 1
        ]);
        
        DB::table('mappings')->insert([
            'article_id' => 1,
            'tag_id' => 2
        ]);

        DB::table('mappings')->insert([
            'article_id' => 2,
            'tag_id' => 1
        ]);

        DB::table('mappings')->insert([
            'article_id' => 2,
            'tag_id' => 4
        ]);

        DB::table('mappings')->insert([
            'article_id' => 3,
            'tag_id' => 5
        ]);

        DB::table('mappings')->insert([
            'article_id' => 4,
            'tag_id' => 1
        ]);

        DB::table('mappings')->insert([
            'article_id' => 4,
            'tag_id' => 3
        ]);

        DB::table('mappings')->insert([
            'article_id' => 4,
            'tag_id' => 6
        ]);

        DB::table('mappings')->insert([
            'article_id' => 5,
            'tag_id' => 5
        ]);

        DB::table('mappings')->insert([
            'article_id' => 6,
            'tag_id' => 7
        ]);

        DB::table('mappings')->insert([
            'article_id' => 7,
            'tag_id' => 8
        ]);

        DB::table('mappings')->insert([
            'article_id' => 7,
            'tag_id' => 9
        ]);

        DB::table('mappings')->insert([
            'article_id' => 7,
            'tag_id' => 13
        ]);

        DB::table('mappings')->insert([
            'article_id' => 8,
            'tag_id' => 10
        ]);

        DB::table('mappings')->insert([
            'article_id' => 8,
            'tag_id' => 14
        ]);

        DB::table('mappings')->insert([
            'article_id' => 9,
            'tag_id' => 11
        ]);

        DB::table('mappings')->insert([
            'article_id' => 10,
            'tag_id' => 9
        ]);

        DB::table('mappings')->insert([
            'article_id' => 10,
            'tag_id' => 14
        ]);

        DB::table('mappings')->insert([
            'article_id' => 11,
            'tag_id' => 16
        ]);

        DB::table('mappings')->insert([
            'article_id' => 11,
            'tag_id' => 17
        ]);

        DB::table('mappings')->insert([
            'article_id' => 11,
            'tag_id' => 20
        ]);

        DB::table('mappings')->insert([
            'article_id' => 12,
            'tag_id' => 15
        ]);

        DB::table('mappings')->insert([
            'article_id' => 13,
            'tag_id' => 18
        ]);

        DB::table('mappings')->insert([
            'article_id' => 13,
            'tag_id' => 19
        ]);

        DB::table('mappings')->insert([
            'article_id' => 14,
            'tag_id' => 18
        ]);

        DB::table('mappings')->insert([
            'article_id' => 14,
            'tag_id' => 20
        ]);

        DB::table('mappings')->insert([
            'article_id' => 15,
            'tag_id' => 16
        ]);

        DB::table('mappings')->insert([
            'article_id' => 16,
            'tag_id' => 21
        ]);

        DB::table('mappings')->insert([
            'article_id' => 16,
            'tag_id' => 22
        ]);

        DB::table('mappings')->insert([
            'article_id' => 16,
            'tag_id' => 23
        ]);

        DB::table('mappings')->insert([
            'article_id' => 17,
            'tag_id' => 24
        ]);

        DB::table('mappings')->insert([
            'article_id' => 18,
            'tag_id' => 25
        ]);

        DB::table('mappings')->insert([
            'article_id' => 19,
            'tag_id' => 26
        ]);

        DB::table('mappings')->insert([
            'article_id' => 20,
            'tag_id' => 27
        ]);

        DB::table('categories')->insert([
            'id' => 1,
            'category' => 'Tech News',
            'slug' => Str::slug('Tech News')
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'category' => 'Hardware Reviews',
            'slug' => Str::slug('Hardware Reviews')
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'category' => 'Software Reviews',
            'slug' => Str::slug('Software Reviews')
        ]);

        DB::table('categories')->insert([
            'id' => 4,
            'category' => 'Opinion Pieces',
            'slug' => Str::slug('Opinion Pieces')
        ]);

        DB::table('tags')->insert([
            'id' => 1,
            'tag' => 'AI',
            'slug' => Str::slug('AI')
        ]);

        DB::table('tags')->insert([
            'id' => 2,
            'tag' => 'ChatGPT',
            'slug' => Str::slug('ChatGPT')
        ]);

        DB::table('tags')->insert([
            'id' => 3,
            'tag' => 'Google',
            'slug' => Str::slug('Google')
        ]);

        DB::table('tags')->insert([
            'id' => 4,
            'tag' => 'Virtual Reality',
            'slug' => Str::slug('Virtual Reality')
        ]);

        DB::table('tags')->insert([
            'id' => 5,
            'tag' => 'Cryptocurrency',
            'slug' => Str::slug('Cryptocurrency')
        ]);

        DB::table('tags')->insert([
            'id' => 6,
            'tag' => 'Smart Watch',
            'slug' => Str::slug('Smart Watch')
        ]);

        DB::table('tags')->insert([
            'id' => 7,
            'tag' => 'SSD',
            'slug' => Str::slug('SSD')
        ]);

        DB::table('tags')->insert([
            'id' => 8,
            'tag' => 'CPU',
            'slug' => Str::slug('CPU')
        ]);

        DB::table('tags')->insert([
            'id' => 9,
            'tag' => 'GPU',
            'slug' => Str::slug('GPU')
        ]);

        DB::table('tags')->insert([
            'id' => 10,
            'tag' => 'Curved Monitor',
            'slug' => Str::slug('Curved Monitor')
        ]);

        DB::table('tags')->insert([
            'id' => 11,
            'tag' => 'Raspberry Pi',
            'slug' => Str::slug('Raspberry Pi')
        ]);

        DB::table('tags')->insert([
            'id' => 12,
            'tag' => 'Intel',
            'slug' => Str::slug('Intel')
        ]);

        DB::table('tags')->insert([
            'id' => 13,
            'tag' => 'AMD',
            'slug' => Str::slug('AMD')
        ]);

        DB::table('tags')->insert([
            'id' => 14,
            'tag' => 'NVidia',
            'slug' => Str::slug('NVidia')
        ]);

        DB::table('tags')->insert([
            'id' => 15,
            'tag' => 'Android',
            'slug' => Str::slug('Android')
        ]);

        DB::table('tags')->insert([
            'id' => 16,
            'tag' => 'Python',
            'slug' => Str::slug('Python')
        ]);

        DB::table('tags')->insert([
            'id' => 17,
            'tag' => 'Java',
            'slug' => Str::slug('Java')
        ]);

        DB::table('tags')->insert([
            'id' => 18,
            'tag' => 'PHP',
            'slug' => Str::slug('PHP')
        ]);

        DB::table('tags')->insert([
            'id' => 19,
            'tag' => 'ReactJS',
            'slug' => Str::slug('ReactJS')
        ]);

        DB::table('tags')->insert([
            'id' => 20,
            'tag' => 'C++',
            'slug' => Str::slug('C++')
        ]);

        DB::table('tags')->insert([
            'id' => 21,
            'tag' => 'Social Media',
            'slug' => Str::slug('Social Media')
        ]);

        DB::table('tags')->insert([
            'id' => 22,
            'tag' => 'Twitter',
            'slug' => Str::slug('Twitter')
        ]);

        DB::table('tags')->insert([
            'id' => 23,
            'tag' => 'Facebook',
            'slug' => Str::slug('Facebook')
        ]);

        DB::table('tags')->insert([
            'id' => 24,
            'tag' => 'Electric Cars',
            'slug' => Str::slug('Electric Cars')
        ]);

        DB::table('tags')->insert([
            'id' => 25,
            'tag' => 'Chatbots',
            'slug' => Str::slug('Chatbots')
        ]);

        DB::table('tags')->insert([
            'id' => 26,
            'tag' => 'Smart Phones',
            'slug' => Str::slug('Smart Phones')
        ]);

        DB::table('tags')->insert([
            'id' => 27,
            'tag' => 'Inverters',
            'slug' => Str::slug('Inverters')
        ]);
    }
}
