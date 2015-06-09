<?php

namespace Ojs\JournalBundle\Document;

use Doctrine\MongoDB\Collection;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use APY\DataGridBundle\Grid\Mapping as GRID;
/**
 * This collection holds resumable article submission data
 * @MongoDb\Document(collection="article_submission_progress")
 * @GRID\Source(columns="id,journal_id,article_data")
 */
class ArticleSubmissionProgress
{
    /**
     * @MongoDb\Id
     * @GRID\Column(title="id")
     */
    protected $id;

    /**
     * @MongoDb\Int
     */
    protected $current_step;

    /**
     * @MongoDB\Date
     */
    protected $started_date;

    /**
     * @MongoDB\Date
     */
    protected $last_resume_date;

    /** @MongoDb\Int @MongoDb\Index() */
    protected $userId;

    /** @MongoDb\String */
    protected $competingOfInterest;

    /**
     * @MongoDb\Int
     * @GRID\Column(title="journalid",type="text")
     */
    protected $journal_id;

    /**
     * @MongoDb\String
     */
    protected $primary_language;

    /** @MongoDb\Int @MongoDb\Index() */
    protected $article_id;

    /** @MongoDb\Collection */
    protected $languages;

    /**
     * article data with locale key  array("en"=> [an array of article data for locale "en"], "tr"=> [...])
     * @MongoDB\Hash
     * @GRID\Column(title="title",type="array")
     */
    protected $article_data;

    /**
     * authors
     * @MongoDB\Hash
     */
    protected $authors;

    /**
     * @MongoDB\Hash
     */
    protected $citations;

    /**
     * @MongoDB\Hash
     */
    protected $files;

    /**
     * @MongoDB\Boolean
     */
    protected $submitted = 0;

    /**
     * Get id
     *
     * @return $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set currentStep
     *
     * @param  int  $currentStep
     * @return self
     */
    public function setCurrentStep($currentStep)
    {
        $this->current_step = $currentStep;

        return $this;
    }

    /**
     * Get currentStep
     *
     * @return int $currentStep
     */
    public function getCurrentStep()
    {
        return $this->current_step;
    }

    /**
     * Set startedDate
     *
     * @param  \DateTime $startedDate
     * @return self
     */
    public function setStartedDate($startedDate)
    {
        $this->started_date = $startedDate;

        return $this;
    }

    /**
     * Get startedDate
     *
     * @return \DateTime $startedDate
     */
    public function getStartedDate()
    {
        return $this->started_date;
    }

    /**
     * Set lastResumeDate
     *
     * @param  \DateTime $lastResumeDate
     * @return self
     */
    public function setLastResumeDate($lastResumeDate)
    {
        $this->last_resume_date = $lastResumeDate;

        return $this;
    }

    /**
     * Get lastResumeDate
     *
     * @return \DateTime $lastResumeDate
     */
    public function getLastResumeDate()
    {
        return $this->last_resume_date;
    }

    /**
     * Set userId
     *
     * @param  int  $userId
     * @return self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int $userId
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set articleId
     *
     * @param  int  $articleId
     * @return self
     */
    public function setArticleId($articleId)
    {
        $this->article_id = $articleId;

        return $this;
    }

    /**
     * Get articleId
     *
     * @return int $articleId
     */
    public function getArticleId()
    {
        return $this->article_id;
    }

    /**
     * Set languages
     *
     * @param  array $languages
     * @return self
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * Get languages
     *
     * @return Collection $languages
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Set articleData
     *
     * @param  array $articleData
     * @return self
     */
    public function setArticleData($articleData)
    {
        $this->article_data = $articleData;

        return $this;
    }

    /**
     * Get articleData
     *
     * @return array $articleData
     */
    public function getArticleData()
    {
        return $this->article_data;
    }

    /**
     * Set authors
     *
     * @param  array $authors
     * @return self
     */
    public function setAuthors($authors)
    {
        $this->authors = $authors;

        return $this;
    }

    /**
     * Get authors
     *
     * @return $authors
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Set citations
     *
     * @param  $citations
     * @return self
     */
    public function setCitations($citations)
    {
        $this->citations = $citations;

        return $this;
    }

    /**
     * Get citations
     *
     * @return $citations
     */
    public function getCitations()
    {
        return $this->citations;
    }

    /**
     * Set files
     *
     * @param $files
     * @return self
     */
    public function setFiles($files)
    {
        $this->files = $files;

        return $this;
    }

    /**
     * Get files
     *
     * @return $files
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Set journalId
     *
     * @param  int  $journalId
     * @return self
     */
    public function setJournalId($journalId)
    {
        $this->journal_id = $journalId;

        return $this;
    }

    /**
     * Get journalId
     *
     * @return int $journalId
     */
    public function getJournalId()
    {
        return $this->journal_id;
    }

    /**
     * Set primaryLanguage
     *
     * @param  string $primaryLanguage
     * @return self
     */
    public function setPrimaryLanguage($primaryLanguage)
    {
        $this->primary_language = $primaryLanguage;

        return $this;
    }

    /**
     * Get primaryLanguage
     *
     * @return string $primaryLanguage
     */
    public function getPrimaryLanguage()
    {
        return $this->primary_language;
    }

    /**
     * Set submitted
     *
     * @param  boolean $submitted
     * @return self
     */
    public function setSubmitted($submitted)
    {
        $this->submitted = $submitted;

        return $this;
    }

    /**
     * Get submitted
     *
     * @return boolean $submitted
     */
    public function getSubmitted()
    {
        return $this->submitted;
    }

    /**
     * @MongoDB\String
     */
    protected $checklist;

    /**
     * @return mixed
     */
    public function getchecklist()
    {
        return $this->checklist;
    }

    /**
     * @param mixed $checklist
     */
    public function setChecklist($checklist)
    {
        $this->checklist = $checklist;
    }

    /**
     * @MongoDB\Int
     */
    protected $section;

    /**
     * @return mixed
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * @param $section
     * @return $this
     */
    public function setSection($section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Set competingOfInterest
     *
     * @param  string $competingOfInterest
     * @return self
     */
    public function setCompetingOfInterest($competingOfInterest)
    {
        $this->competingOfInterest = $competingOfInterest;

        return $this;
    }

    /**
     * Get competingOfInterest
     *
     * @return string $competingOfInterest
     */
    public function getCompetingOfInterest()
    {
        return $this->competingOfInterest;
    }
}
