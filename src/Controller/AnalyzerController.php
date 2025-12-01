<?php
// src/Controller/AnalyzerController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnalyzerController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request): Response
    {
        $followers = [];
        $following = [];

        // Check if form was submitted with files
        if ($request->isMethod('POST') && $request->files->has('followers') && $request->files->has('following')) {
            // Read followers (multiple files)
            $followerFiles = $request->files->get('followers');
            if (is_array($followerFiles)) {
                foreach ($followerFiles as $file) {
                    if ($file && $file->isValid()) {
                        $data = json_decode(file_get_contents($file->getPathname()), true);
                        if (is_array($data)) {
                            foreach ($data as $item) {
                                $username = $item['string_list_data'][0]['value'] ?? '';
                                $timestamp = $item['string_list_data'][0]['timestamp'] ?? null;
                                if ($username && $timestamp) {
                                    $followers[$username] = \DateTimeImmutable::createFromFormat('U', $timestamp);
                                }
                            }
                        }
                    }
                }
            }

            // Read following (single file)
            $followingFile = $request->files->get('following');
            if ($followingFile && $followingFile->isValid()) {
                $data = json_decode(file_get_contents($followingFile->getPathname()), true);
                if (isset($data['relationships_following']) && is_array($data['relationships_following'])) {
                    foreach ($data['relationships_following'] as $item) {
                        $username = $item['title'] ?? '';
                        $timestamp = $item['string_list_data'][0]['timestamp'] ?? null;
                        if ($username) {
                            $following[$username] = $timestamp ? \DateTimeImmutable::createFromFormat('U', $timestamp) : null;
                        }
                    }
                }
            }
        }

        return $this->render('analyzer/index.html.twig', [
            'followers' => $followers,
            'following' => $following,
            'hasData' => !empty($followers) || !empty($following),
        ]);
    }
}