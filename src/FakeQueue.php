<?php

namespace khalyutkin\fakeQueue;

/**
 * This is just an example.
 */
class FakeQueue extends \yii\queue\Queue
{
    
    /**
     * {@inheritDoc}
     */
    protected function pushMessage($message, $ttr, $delay, $priority)
    {
        /** @var \yii\queue\JobInterface $unserializedData */
        $unserializedData = $this->serializer->unserialize($message);
        if ($this->strictJobType && $unserializedData instanceof \yii\queue\JobInterface) {
            $unserializedData->execute($this);
        }
    }
    
    /**
     * {@inheritDoc}
     */
    public function status($id)
    {
        return 1;
    }
    
}
