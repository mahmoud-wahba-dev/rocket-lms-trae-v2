<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use App\Models\Role;
use App\Models\Webinar;
use App\Models\Category;
use Illuminate\Support\Str;

class GenerateFakeData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seed:fake-data {--teachers=5} {--courses=6}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate premium Arabic fake teachers and courses/webinars to populate the landing page';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('🎨 Starting premium fake data generator...');

        $teachersCount = (int) $this->option('teachers');
        $coursesCount = (int) $this->option('courses');

        // 1. Ensure we have at least one Category
        $category = Category::first();
        if (empty($category)) {
            $this->info('📁 Creating default Engineering category...');
            $category = Category::create([
                'slug' => 'engineering-management',
                'enable' => true,
                'order' => 1,
            ]);
            $category->translateOrNew('ar')->title = 'الهندسة وإدارة المشاريع';
            $category->translateOrNew('en')->title = 'Engineering & Project Management';
            $category->save();
        }

        // 2. Generate Teachers
        $teacherNames = [
            'أ.د. عبد الرحمن الحربي',
            'م. سارة القحطاني',
            'د. خالد الشمري',
            'أ. فاطمة العتيبي',
            'م. محمد الدوسري',
            'د. ريم الغامدي',
            'م. فيصل المطيري'
        ];

        $teacherBios = [
            'خبير استشاري في هندسة وإدارة المشاريع الإنشائية الكبرى مع خبرة تفوق 15 عاماً.',
            'مصممة واجهات ومطورة تطبيقات أولى مع شغف بتدريس تجربة المستخدم UI/UX.',
            'أستاذ مشارك في علوم البيانات والذكاء الاصطناعي، ومستشار تقني لكبرى الجهات.',
            'مدربة معتمدة في القيادة الإدارية وبناء الفرق وحلول التطوير التنظيمي.',
            'مهندس برمجيات أول متخصص في بناء النظم الموزعة والحوسبة السحابية.',
            'باحثة ومستشارة في التنمية المستدامة وتقنيات الطاقة المتجددة.',
            'خبير إدارة محافظ هندسية معتمد PMP ومستشار إدارة الجودة الرشيقة.'
        ];

        $teachers = [];
        $existingTeachers = User::where('role_name', 'teacher')->get();

        if ($existingTeachers->count() >= $teachersCount) {
            $this->info('👥 Using existing teacher accounts.');
            $teachers = $existingTeachers->all();
        } else {
            $this->info("👥 Generating {$teachersCount} premium Arabic teacher profiles...");
            for ($i = 0; $i < $teachersCount; $i++) {
                $name = $teacherNames[$i % count($teacherNames)];
                $bio = $teacherBios[$i % count($teacherBios)];
                $email = 'teacher_' . Str::random(5) . '@siematplus.com';
                
                $teacher = User::create([
                    'full_name' => $name,
                    'role_name' => 'teacher',
                    'role_id' => 4, // Teacher Role ID
                    'email' => $email,
                    'password' => password_hash('123456', PASSWORD_BCRYPT),
                    'status' => 'active',
                    'bio' => $bio,
                    'headline' => 'مستشار تدريبي معتمد',
                    'about' => $bio . ' يسعى دائماً لنقل المعرفة الأكاديمية والخبرة الميدانية العميقة للطلاب والمحترفين لتمكينهم في سوق العمل.',
                    'mobile' => '05' . rand(10000000, 99999999),
                    'created_at' => time(),
                    'updated_at' => time(),
                ]);
                $teachers[] = $teacher;
            }
        }

        // 3. Generate Webinars/Courses
        $courseTemplates = [
            [
                'title' => 'الاستراتيجيات الحديثة في إدارة المشاريع الهندسية',
                'summary' => 'دورة مكثفة صُممت خصيصاً لسد الفجوة بين المعرفة الأكاديمية والتطبيق الميداني في كبرى الشركات.',
                'description' => 'ستتعلم في هذه الدورة التخطيط المالي والزمني للمشاريع الهندسية باستخدام أحدث الأدوات والبرمجيات كـ Primavera P6 ومنهجيات الرشاقة Agile لتفادي تأخير التسليم ورفع جودة الأداء الميداني.',
                'price' => 199.00
            ],
            [
                'title' => 'هندسة البيانات والذكاء الاصطناعي للمديرين',
                'summary' => 'تعلم كيف تحول البيانات إلى قرارات استراتيجية مبنية على الذكاء الاصطناعي والتعلم الآلي.',
                'description' => 'شرح عملي للمفاهيم الأساسية في علوم البيانات، نماذج التنبؤ، وتطبيقات الذكاء الاصطناعي التوليدي لمضاعفة أداء الشركات وتحقيق أقصى درجات الفعالية الإنتاجية.',
                'price' => 249.00
            ],
            [
                'title' => 'تصميم واجهات وتجربة المستخدم الاحترافية UI/UX',
                'summary' => 'انطلق في مسار مصمم المنتجات الرقمية وتعلم أسرار تصميم واجهات تضمن أفضل تجربة للمستخدم.',
                'description' => 'تغطي الدورة مهارات البحث، بناء الهياكل السلكية Wireframes، النمذجة الأولية وتصميم واجهات تفاعلية جذابة باستخدام أداة Figma مع تطبيقات عملية وحقيقية.',
                'price' => 149.00
            ],
            [
                'title' => 'تطوير التطبيقات متكاملة الخدمات باستخدام Laravel & Vue.js',
                'summary' => 'احترف بناء وتطوير الأنظمة البرمجية والمواقع الإلكترونية المتقدمة ذات الأداء الفائق والآمن.',
                'description' => 'رحلة تعليمية شاملة من الصفر وحتى إطلاق مشاريع متكاملة على السيرفرات السحابية، تتضمن أمن المعلومات، قواعد البيانات المتقدمة، وبناء منصات الدفع.',
                'price' => 299.00
            ],
            [
                'title' => 'حلول الطاقة المتجددة والتصميم البيئي المستدام للمباني',
                'summary' => 'مستقبل الهندسة المعمارية الحديثة يكمن في البناء الأخضر والتقنيات الصديقة للبيئة.',
                'description' => 'دورة متخصصة للمهندسين المعماريين والمدنيين للتعرف على معايير LEED، تقنيات الطاقة الشمسية وتصميم المباني الذكية المستدامة الموفرة للطاقة.',
                'price' => 179.00
            ],
            [
                'title' => 'القيادة الفعالة وإدارة التغيير في المؤسسات المعاصرة',
                'summary' => 'طوّر رؤيتك القيادية واكتسب الأدوات اللازمة لقيادة فرق العمل والمشاريع في فترات التحول الجوهري.',
                'description' => 'دورة تفاعلية تركز على الذكاء العاطفي القيادي، استراتيجيات احتواء مقاومة التغيير التنظيمي، وبناء ثقافة التميز والابتكار المستمر داخل بيئة العمل.',
                'price' => 129.00
            ]
        ];

        $this->info("📚 Generating {$coursesCount} premium courses...");
        for ($i = 0; $i < $coursesCount; $i++) {
            $template = $courseTemplates[$i % count($courseTemplates)];
            $teacher = $teachers[$i % count($teachers)];
            $title = $template['title'] . ' - الدفعة ' . rand(1, 5);
            $slug = Webinar::makeSlug($title);

            // Double check unique slug
            if (Webinar::where('slug', $slug)->exists()) {
                $slug .= '-' . rand(10, 99);
            }

            $webinar = Webinar::create([
                'teacher_id' => $teacher->id,
                'creator_id' => $teacher->id,
                'category_id' => $category->id,
                'type' => 'course',
                'slug' => $slug,
                'start_date' => time() + (rand(1, 10) * 86400),
                'end_date' => time() + (rand(30, 60) * 86400),
                'duration' => rand(120, 2400), // Duration in minutes
                'thumbnail' => '/assets/landing_v1/img/home/course.webp',
                'image_cover' => '/assets/landing_v1/img/home/course.webp',
                'capacity' => rand(50, 200),
                'price' => $template['price'],
                'status' => 'active',
                'support' => true,
                'partner_instructor' => false,
                'subscribe' => false,
                'private' => false,
                'created_at' => time(),
                'updated_at' => time(),
            ]);

            // Save translations
            $webinar->translateOrNew('ar')->title = $title;
            $webinar->translateOrNew('ar')->summary = $template['summary'];
            $webinar->translateOrNew('ar')->description = $template['description'];

            $webinar->translateOrNew('en')->title = Str::slug($template['title']);
            $webinar->translateOrNew('en')->summary = 'Premium course covering modern concepts and practical field applications.';
            $webinar->translateOrNew('en')->description = 'This is the English description for ' . $template['title'];

            $webinar->save();
        }

        $this->info('🎉 Seeding successfully completed!');
        $this->info("Generated: {$teachersCount} teachers and {$coursesCount} active webinars/courses.");
        
        return 0;
    }
}
