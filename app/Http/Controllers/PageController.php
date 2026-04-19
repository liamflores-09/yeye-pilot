<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $stats = [
            'players_served' => 1247,
            'win_rate' => 94.7,
            'active_pilots' => 12,
            'happy_clients' => 98.5
        ];
        
        $testimonials = [
            ['name' => 'John Michael', 'rank' => 'Mythic', 'message' => 'Got me from Legend to Mythic in 3 days!', 'rating' => 5],
            ['name' => 'Sarah Chen', 'rank' => 'Epic', 'message' => 'Very professional service, will use again!', 'rating' => 5],
            ['name' => 'Alex Rivera', 'rank' => 'Grandmaster', 'message' => 'The best pilot service in Magic Chess', 'rating' => 5]
        ];
        
        return view('home', compact('stats', 'testimonials'));
    }
    
    public function about()
    {
        $achievements = [
            ['year' => '2024', 'title' => 'Top Pilot Service Award', 'description' => 'Rated #1 by 500+ clients'],
            ['year' => '2023', 'title' => 'Fastest Rank Boost', 'description' => 'Achieved 1000+ successful boosts'],
            ['year' => '2023', 'title' => 'Best Customer Service', 'description' => '98.5% satisfaction rate']
        ];
        
        $location = [
            'city' => 'Singapore',
            'timezone' => 'GMT+8',
            'response_time' => 'Under 5 minutes',
            'support_hours' => '24/7'
        ];
        
        return view('about', compact('achievements', 'location'));
    }
    
    public function synergies()
    {
        $synergies = [
            ['name' => 'Venom Assassin', 'tier' => 'S+', 'win_rate' => '68%', 'difficulty' => 'Medium', 'commanders' => ['Viper', 'Shadow', 'Nyx'], 'description' => 'High burst damage with poison DOT'],
            ['name' => '6 Mages', 'tier' => 'S', 'win_rate' => '62%', 'difficulty' => 'Easy', 'commanders' => ['Eudora', 'Valir', 'Gord'], 'description' => 'Massive magic damage AoE'],
            ['name' => 'Dragon Tamer', 'tier' => 'A+', 'win_rate' => '58%', 'difficulty' => 'Hard', 'commanders' => ['Ling', 'Wanwan', 'Zilong'], 'description' => 'Late game powerhouse'],
            ['name' => 'Astro Warrior', 'tier' => 'S-', 'win_rate' => '60%', 'difficulty' => 'Medium', 'commanders' => ['Kimmy', 'Granger', 'Claude'], 'description' => 'Ranged dominance'],
            ['name' => 'Guardian', 'tier' => 'A', 'win_rate' => '55%', 'difficulty' => 'Easy', 'commanders' => ['Tigreal', 'Franco', 'Atlas'], 'description' => 'Tank sustain composition']
        ];
        
        return view('synergies', compact('synergies'));
    }
    
    public function commanders()
    {
        $commanders = [
            ['name' => 'Viper', 'role' => 'Assassin', 'rarity' => 'Legendary', 'skill' => 'Poison Strike', 'synergy' => 'Venom', 'win_rate' => '72%'],
            ['name' => 'Eudora', 'role' => 'Mage', 'rarity' => 'Epic', 'skill' => 'Chain Lightning', 'synergy' => 'Mage', 'win_rate' => '68%'],
            ['name' => 'Ling', 'role' => 'Fighter', 'rarity' => 'Legendary', 'skill' => 'Dragon Flight', 'synergy' => 'Dragon', 'win_rate' => '71%'],
            ['name' => 'Kimmy', 'role' => 'Marksman', 'rarity' => 'Epic', 'skill' => 'Chemical Strike', 'synergy' => 'Astro', 'win_rate' => '65%'],
            ['name' => 'Tigreal', 'role' => 'Tank', 'rarity' => 'Rare', 'skill' => 'Sacred Hammer', 'synergy' => 'Guardian', 'win_rate' => '59%']
        ];
        
        return view('commanders', compact('commanders'));
    }
    
    public function pricing()
    {
        $packages = [
            ['name' => 'Per Star', 'price' => '$5', 'stars' => '1 Star', 'time' => '30 mins', 'featured' => false, 'guarantee' => '100% Win Rate'],
            ['name' => 'Unli Star', 'price' => '$45', 'stars' => 'Unlimited', 'time' => '24 Hours', 'featured' => true, 'guarantee' => '+ Guaranteed Rank Up'],
            ['name' => 'Spam Commander', 'price' => '$30', 'stars' => '50 Stars', 'time' => '12 Hours', 'featured' => false, 'guarantee' => 'Specific Commander'],
            ['name' => 'Secured Win Rate', 'price' => '$60', 'stars' => 'Unlimited', 'time' => '48 Hours', 'featured' => false, 'guarantee' => '95%+ Win Rate Guarantee']
        ];
        
        return view('pricing', compact('packages'));
    }
    
    public function gallery()
    {
        $images = [
            ['url' => 'https://via.placeholder.com/400x300/6f42c1/white?text=Rank+Boost+Before/After', 'title' => 'Legend to Mythic Boost'],
            ['url' => 'https://via.placeholder.com/400x300/fd7e14/white?text=Win+Streak+10', 'title' => '10 Game Win Streak'],
            ['url' => 'https://via.placeholder.com/400x300/20c997/white?text=Commander+Mastery', 'title' => 'Viper Mastery Showcase'],
            ['url' => 'https://via.placeholder.com/400x300/dc3545/white?text=Tournament+Win', 'title' => 'Community Tournament Win'],
            ['url' => 'https://via.placeholder.com/400x300/0dcaf0/white?text=Client+Review', 'title' => 'Happy Client Showcase'],
            ['url' => 'https://via.placeholder.com/400x300/198754/white?text=Fast+Boost', 'title' => '3 Hours to Mythic']
        ];
        
        return view('gallery', compact('images'));
    }
    
    public function faq()
    {
        $faqs = [
            ['q' => 'How does the pilot service work?', 'a' => 'You share your account details securely, our pilot plays on your behalf to achieve your desired rank.'],
            ['q' => 'Is it safe?', 'a' => 'Yes! We use VPN matching your location and have 100% account safety guarantee.'],
            ['q' => 'How long does it take?', 'a' => 'Per star takes 30 mins, Unli Star packages are completed within 24 hours.'],
            ['q' => 'Do you offer refunds?', 'a' => 'Yes, money-back guarantee if we fail to meet the promised win rate.'],
            ['q' => 'Can I request specific commanders?', 'a' => 'Absolutely! Our Spam Commander package focuses on your preferred hero.'],
            ['q' => 'How do I contact support?', 'a' => '24/7 support via Discord, WhatsApp, or Live Chat on our website.']
        ];
        
        return view('faq', compact('faqs'));
    }
    
    public function contact()
    {
        return view('contact');
    }
}