<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeText;
use App\Models\HomeCard;
use App\Models\HomeDoctor;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{

    public function run(): void
    {
        $texts = [
            'hero_badge'       => 'PUH',
            'hero_title'       => 'PRESIDENT UNIVERSITY HOSPITAL',
            'hero_desc'        => '❝ For Better Health Services and Regional Competitiveness ❞',
            'hero_btn_1_text'  => 'About PUH',
            'hero_btn_2_text'  => 'Contact Us',
            
            'about_badge'      => 'About PUH',
            'about_title'      => 'Welcome to PUH',
            'about_desc'       => "Welcome to President University Hospital (PUH), a modern general hospital dedicated to delivering professional, high-quality healthcare while serving as a center for medical education, research, and innovation.\nAs an integral part of President University, PUH is committed to advancing an integrated healthcare ecosystem through the Academic Health System (AHS), fostering collaboration among clinical care, medical education, research, and community engagement.\nSupported by experienced healthcare professionals, state-of-the-art facilities, and a culture that prioritizes patient safety and compassionate care, PUH is dedicated to providing safe, high-quality, and patient-centered healthcare while contributing to the advancement of medical science and the development of future healthcare professionals.",
            
            'academic_badge'   => 'Education & Research',
            'academic_title'   => 'Advancing Healthcare Through Education & Innovation',
            'academic_desc'    => 'President University Hospital (PUH) is a teaching hospital that integrates healthcare services, medical education, research, and innovation within a comprehensive Academic Health System. As an integral part of President University, PUH is committed to delivering high-quality, patient-centered healthcare while advancing medical education, developing future healthcare professionals, and strengthening the competitiveness of both the industrial community and the wider society through excellence in clinical care, education, and research.',
            'vision_text'      => 'To become an internationally recognized teaching hospital, distinguished for excellence in healthcare services, medical education, research, and innovation, improving the quality of life of the community while strengthening regional competitiveness.',
            
            'services_badge'   => 'Medical Services',
            'services_title'   => 'Our Comprehensive Medical Offerings',
            
            'doctors_badge'    => 'Hospital Leadership',
            'doctors_title'    => 'Board of Directors',
            
            'testimony_badge'  => 'Testimonial',
            'testimony_title'  => 'Patients Say About Our Services',

            'contact_badge'    => 'Contact Us',
            'contact_title'    => 'Please Feel Free To Contact Us',
            'contact_address'  => 'Jababeka Industrial Township, Cikarang, Bekasi, Indonesia',
            'contact_email'    => 'purth@president.ac.id ',
            'contact_phone'    => '+62 21-8984-0530',
            'contact_map_url'  => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7442281324247!2d107.1483669!3d-6.2973038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699b1e17175793%3A0x4f3c3244b22dbb10!2sPresident%20University%20Hospital!5e0!3m2!1sid!2sid!4v1783326808446!5m2!1sid!2sid',
        ];

        foreach ($texts as $id => $value) {
            HomeText::updateOrCreate(['id' => $id], ['value' => $value]);
        }

        // Clean tables
        DB::table('home_cards')->truncate();
        DB::table('home_doctors')->truncate();
        DB::table('home_testimonies')->truncate();

        $aboutCards = [
            ['icon' => 'fas fa-university', 'title' => 'Academic Teaching Hospital', 'text' => null, 'sort_order' => 1],
            ['icon' => 'fas fa-hospital-alt', 'title' => 'Modern Medical Facilities', 'text' => null, 'sort_order' => 2],
            ['icon' => 'fas fa-user-md', 'title' => 'Experienced Medical Professionals', 'text' => null, 'sort_order' => 3],
            ['icon' => 'fas fa-microscope', 'title' => 'Evidence-Based Healthcare', 'text' => null, 'sort_order' => 4],
        ];

        foreach ($aboutCards as $card) {
            HomeCard::create(array_merge($card, ['section' => 'about']));
        }

        $missionCards = [
            ['icon' => 'fas fa-check-circle', 'title' => 'Quality Healthcare', 'text' => 'To deliver professional, safe, high-quality, and patient-centered healthcare services.', 'sort_order' => 1],
            ['icon' => 'fas fa-check-circle', 'title' => 'Clinical Education', 'text' => 'To serve as the primary teaching hospital for the Faculty of Medicine, President University, by providing excellence in clinical education and training.', 'sort_order' => 2],
            ['icon' => 'fas fa-check-circle', 'title' => 'Research & Innovation', 'text' => 'To advance healthcare research and innovation that contribute to the well-being of society and the development of the healthcare industry.', 'sort_order' => 3],
            ['icon' => 'fas fa-check-circle', 'title' => 'Strategic Partnerships', 'text' => 'To establish strategic partnerships with academic institutions, healthcare organizations, government agencies, industry, and international partners.', 'sort_order' => 4],
            ['icon' => 'fas fa-check-circle', 'title' => 'Professional Development', 'text' => 'To develop healthcare professionals who demonstrate integrity, professionalism, adaptability to emerging healthcare technologies, and a global perspective.', 'sort_order' => 5],
            ['icon' => 'fas fa-check-circle', 'title' => 'Hospital Governance', 'text' => 'To implement effective, transparent, accountable, and sustainable hospital governance.', 'sort_order' => 6],
        ];

        foreach ($missionCards as $card) {
            HomeCard::create(array_merge($card, ['section' => 'mission']));
        }

        $coreValuesCards = [
            ['icon' => 'fas fa-star', 'title' => 'P - Professionalism', 'text' => 'Delivering healthcare services in accordance with the highest professional standards and ethical principles.', 'sort_order' => 1],
            ['icon' => 'fas fa-star', 'title' => 'R - Respect', 'text' => 'Treating every patient, family member, and healthcare professional with dignity, respect, and compassion.', 'sort_order' => 2],
            ['icon' => 'fas fa-star', 'title' => 'E - Excellence', 'text' => 'Striving for excellence through continuous quality improvement, innovation, and outstanding performance.', 'sort_order' => 3],
            ['icon' => 'fas fa-star', 'title' => 'S - Service', 'text' => 'Providing compassionate, responsive, and patient-centered care with sincerity and dedication.', 'sort_order' => 4],
            ['icon' => 'fas fa-star', 'title' => 'I - Integrity', 'text' => 'Upholding honesty, accountability, transparency, and ethical conduct in every aspect of our work.', 'sort_order' => 5],
            ['icon' => 'fas fa-star', 'title' => 'D - Development', 'text' => 'Fostering continuous growth through education, research, innovation, and lifelong learning.', 'sort_order' => 6],
            ['icon' => 'fas fa-star', 'title' => 'E - Empathy', 'text' => 'Understanding and responding to the needs of patients and their families with compassion and kindness.', 'sort_order' => 7],
            ['icon' => 'fas fa-star', 'title' => 'N - Networking', 'text' => 'Building strong partnerships and collaborations with national and international institutions to advance healthcare, education, and research.', 'sort_order' => 8],
            ['icon' => 'fas fa-star', 'title' => 'T - Trust', 'text' => 'Earning and maintaining the trust of our patients, partners, and communities through excellence, reliability, and integrity.', 'sort_order' => 9],
        ];

        foreach ($coreValuesCards as $card) {
            HomeCard::create(array_merge($card, ['section' => 'core_values']));
        }

        $serviceCards = [
            ['icon' => 'fas fa-briefcase-medical', 'title' => 'General Services', 'text' => 'General Practitioner, Medical Check Up, Emergency Services, Laboratory, Pharmacy, Radiology', 'sort_order' => 1],
            ['icon' => 'fas fa-stethoscope', 'title' => 'Specialist Services', 'text' => 'Pediatrics, Internal Medicine, General Surgery, Obstetrics & Gynecology', 'sort_order' => 2],
        ];

        foreach ($serviceCards as $card) {
            HomeCard::create(array_merge($card, ['section' => 'service']));
        }

        $doctors = [
            [
                'image'      => 'profile-johanes-poso.png',
                'name'       => 'Johanes Poso',
                'title'      => 'President Director',
                'text'       => 'Johanes Poso is the Founder and President Director of PT Rumah Prima Sehat. With decades of experience in healthcare development, he has successfully built and expanded healthcare facilities from a community pharmacy into a modern hospital network. His leadership is driven by a commitment to delivering accessible, high-quality, and patient-centered healthcare services.',
                'twitter'    => '#',
                'fb'         => '#',
                'linkedin'   => '#',
                'sort_order' => 1
            ],
            [
                'image'      => 'profile-setiawan-mardjuki.png',
                'name'       => 'Setiawan Mardjuki',
                'title'      => 'Director',
                'text'       => 'Setiawan Mardjuki is an experienced executive with extensive expertise in industrial estate development, real estate, investment, and corporate management. He holds a Master of Computer Science and a Master of Finance from California State University, USA. At PT Rumah Prima Sehat, he provides strategic leadership to support sustainable growth and the delivery of high-quality healthcare services.',
                'twitter'    => '#',
                'fb'         => '#',
                'linkedin'   => '#',
                'sort_order' => 2
            ],
            [
                'image'      => 'profile-eric-maruapey.png',
                'name'       => 'Dr. Erik Maruapey, MARS',
                'title'      => 'Legal and Compliance Trustee',
                'text'       => 'dr. Erik Maruapey, MARS, serves as the Legal and Compliance Trustee, bringing a strong background in healthcare management and legal affairs. He ensures that the hospital upholds the highest standards of governance, regulatory compliance, and ethical conduct in every aspect of its operations.',
                'twitter'    => '#',
                'fb'         => '#',
                'linkedin'   => '#',
                'sort_order' => 3
            ],
            [
                'image'      => 'profile-theodora-elyas.png',
                'name'       => 'Theodora Elyas, Apt., S.Farm.',
                'title'      => 'Hospital Director',
                'text'       => 'Theodora Elyas is a licensed pharmacist with extensive experience in hospital support services and healthcare operations. She is committed to strengthening clinical support, operational excellence, and quality standards to ensure safe, efficient, and patient-centered healthcare services.',
                'twitter'    => '#',
                'fb'         => '#',
                'linkedin'   => '#',
                'sort_order' => 4
            ],
            [
                'image'      => 'profile-agus-baharudin.png',
                'name'       => 'Agus Baharudin Soleh, S.Pd., M.M.',
                'title'      => 'Vice Director of General Affair',
                'text'       => 'Agus Baharudin Soleh is a healthcare and hospitality management professional with over 15 years of leadership experience in operations, project management, and organizational development. He holds a Master of Management from President University and a Bachelor of Education from Mathla\'ul Anwar University. As Hospital Vice Director, he is committed to driving operational excellence, innovation, and patient-centered healthcare services.',
                'twitter'    => '#',
                'fb'         => '#',
                'linkedin'   => '#',
                'sort_order' => 5
            ],
        ];

        foreach ($doctors as $doctor) {
            HomeDoctor::create($doctor);
        }
    }
    
}