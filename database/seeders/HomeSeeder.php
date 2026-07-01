<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeText;
use App\Models\HomeCard;
use App\Models\HomeDoctor;
use App\Models\HomeTestimony;

class HomeSeeder extends Seeder
{

    public function run(): void
    {
        $texts = [
            'hero_badge'       => 'Welcome To PresiMedic',
            'hero_title'       => 'Best Healthcare Solution In Your City',
            'hero_desc'        => 'We offer comprehensive outpatient services, advanced diagnostic tools, and state-of-the-art emergency rooms to keep you and your family healthy.',
            'hero_btn_1_text'  => 'Our Services',
            'hero_btn_2_text'  => 'Appointment',
            'about_badge'      => 'About Us',
            'about_title'      => 'Best Medical Care For Yourself and Your Family',
            'about_desc'       => 'Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod.',
            'services_badge'   => 'Services',
            'services_title'   => 'Excellent Medical Services',
            'doctors_badge'    => 'Our Doctors',
            'doctors_title'    => 'Qualified Healthcare Professionals',
            'testimony_badge'  => 'Testimonial',
            'testimony_title'  => 'Patients Say About Our Services',
        ];

        foreach ($texts as $id => $value) {
            HomeText::updateOrCreate(['id' => $id], ['value' => $value]);
        }

        $aboutCards = [
            ['icon' => 'fa fa-user-md', 'title' => 'Qualified Doctors', 'text' => null, 'sort_order' => 1],
            ['icon' => 'fa fa-procedures', 'title' => 'Emergency Services', 'text' => null, 'sort_order' => 2],
            ['icon' => 'fa fa-microscope', 'title' => 'Accurate Testing', 'text' => null, 'sort_order' => 3],
            ['icon' => 'fa fa-ambulance', 'title' => 'Free Ambulance', 'text' => null, 'sort_order' => 4],
        ];

        foreach ($aboutCards as $card) {
            HomeCard::create(array_merge($card, ['section' => 'about']));
        }

        $serviceCards = [
            ['icon' => 'fa fa-user-md', 'title' => 'Emergency Care', 'text' => 'Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit.', 'sort_order' => 1],
            ['icon' => 'fa fa-procedures', 'title' => 'Operation & Surgery', 'text' => 'Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit.', 'sort_order' => 2],
            ['icon' => 'fa fa-stethoscope', 'title' => 'Outdoor Checkup', 'text' => 'Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit.', 'sort_order' => 3],
            ['icon' => 'fa fa-ambulance', 'title' => 'Ambulance Service', 'text' => 'Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit.', 'sort_order' => 4],
            ['icon' => 'fa fa-pills', 'title' => 'Medicine & Pharmacy', 'text' => 'Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit.', 'sort_order' => 5],
            ['icon' => 'fa fa-microscope', 'title' => 'Blood Testing', 'text' => 'Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit.', 'sort_order' => 6],
        ];

        foreach ($serviceCards as $card) {
            HomeCard::create(array_merge($card, ['section' => 'service']));
        }

        $doctors = [
            [
                'image'      => 'https://images.unsplash.com/photo-1537368910025-700350fe46c7?auto=format&fit=crop&w=600&q=80',
                'name'       => 'Dr. John Doe',
                'title'      => 'Cardiology Specialist',
                'text'       => 'Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor.',
                'twitter'    => '#',
                'fb'         => '#',
                'linkedin'   => '#',
                'sort_order' => 1
            ],
            [
                'image'      => 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=600&q=80',
                'name'       => 'Dr. Alex Smith',
                'title'      => 'Cardiology Specialist',
                'text'       => 'Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor.',
                'twitter'    => '#',
                'fb'         => '#',
                'linkedin'   => '#',
                'sort_order' => 2
            ],
            [
                'image'      => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=600&q=80',
                'name'       => 'Dr. Sarah Jenkins',
                'title'      => 'Cardiology Specialist',
                'text'       => 'Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor.',
                'twitter'    => '#',
                'fb'         => '#',
                'linkedin'   => '#',
                'sort_order' => 3
            ],
        ];

        foreach ($doctors as $doctor) {
            HomeDoctor::create($doctor);
        }

        $testimonials = [
            [
                'image' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=150&h=150&q=80',
                'name'  => 'Jane Smith',
                'title' => 'Teacher',
                'text'  => 'Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.',
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&h=150&q=80',
                'name'  => 'Robert Johnson',
                'title' => 'Business Owner',
                'text'  => 'Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.',
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=150&h=150&q=80',
                'name'  => 'Emily Davis',
                'title' => 'Software Engineer',
                'text'  => 'Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.',
            ],
        ];

        foreach ($testimonials as $testimony) {
            HomeTestimony::create($testimony);
        }
    }
    
}